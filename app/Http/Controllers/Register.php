<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{

    public function getUserNameAjax(Request $request)
    {

        $user = User::where('username', $request->user_id)->first();
        if ($user) {
            return $user->name;
        } else {
            return 1;
        }
    }

    public function index()
    {
        return view('auth.verify');
    }


    public function find_position($snode, $pos)
    {
        $q = User::select('id')->where('Parentid', $snode)->where('position', $pos)->first();
        if (empty($q)) {
            $this->downline = $snode;
        } else {
            $user = $q->id;
            // print_r($user);die();
            $this->find_position($user, $pos);
        }
    }
    public function forgot_password()
    {

        return view('auth.passwords.forgot-password');
    }


    public function sendResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $code = rand(100000, 999999); // or Str::random(6)

        // Save to forgotresets table (custom table)
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $code,
                'created_at' => Carbon::now(),
            ]
        );

        return response()->json(['message' => 'Verification code sent.']);
    }
    public function submitResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required', // validate this if needed
            'password' => 'required|confirmed|min:5',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email.']);
        }

        // Optional: validate the code from database if you are storing OTP

        $user->password = bcrypt($request->password);
        $user->PSR = $request->password; // Optional, if you store plain password
        $user->save();

        return redirect()->route('login')->with('success', 'Password reset successfully.');
    }
    public function loginAction(Request $request)
    {

        try {
            // Step 1: Validate Input
            $validation = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required|string',
            ]);

            if ($validation->fails()) {
                $errorMessage = $validation->getMessageBag()->first();

                Log::warning("Validation Failed", [
                    'errors' => $validation->getMessageBag()->toArray(),
                    'input' => $request->all(),
                ]);

                return Redirect::back()
                    ->withErrors($errorMessage)
                    ->withInput();
            }

            // Step 2: Extract credentials and attempt login
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                // Step 3: Check if user is blocked
                if ($user->active_status === "Block") {
                    Auth::logout();

                    Log::notice("Blocked User Attempt", [
                        'user_id' => $user->id,
                        'username' => $user->username,
                        'ip' => $request->ip(),
                    ]);

                    return Redirect::back()
                        ->withErrors(['You are Blocked by admin']);
                }

                // Step 4: Successful login
                Log::info("User Login Success", [
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'ip' => $request->ip(),
                ]);

                // You can also trigger a frontend tray notification here
                session()->flash('success', 'Login successfully');

                return redirect()->route('user.dashboard');
            } else {
                // Step 5: Failed login attempt
                Log::warning("Login Failed", [
                    'username' => $request->input('username'),
                    'ip' => $request->ip(),
                ]);

                return Redirect::back()
                    ->withErrors(['Invalid Username & Password!']);
            }
        } catch (\Exception $e) {
            // Step 6: Catch any unexpected exceptions
            Log::error("Unexpected Error During Login", [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString(),
                'input' => $request->all(),
            ]);

            return Redirect::back()
                ->withErrors(['An unexpected error occurred. Please try again later.']);
        }
    }


    public function register(Request $request)
    {
        try {
            $validation =  Validator::make($request->all(), [
                'email' => 'required',
                'name' => 'required',
                'password' => 'required|confirmed|min:5',
                'country_code' => 'required',

                'sponsor' => 'required|exists:users,username',
                'phone' => 'required|numeric|min:10'

            ]);


            if ($validation->fails()) {

                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            //check if email exist
            // if (User::where('email', $request->email)->exists()) {
            //     return Redirect::back()->withErrors(['email' => 'Email already exists.'])->withInput();
            // }

            $user = User::where('username', $request->sponsor)->first();
            if (!$user) {
                return Redirect::back()->withErrors(array('Introducer ID Not Active'));
            }
            $totalID = User::count();
            $totalID++;
            // $username = substr(time(), 4) . $totalID;

            $username = "EV".substr(time(), -2) . substr(rand(), -2) . substr(mt_rand(), -2);
            $tpassword = substr(time(), -2) . substr(rand(), -2) . substr(mt_rand(), -1);
            $post_array  = $request->all();
            //  

            $data['name'] = $post_array['name'];
            $data['phone'] = $post_array['phone'];
                $data['country_code'] = $post_array['country_code'];


            $data['username'] = $username;
            $data['email'] = $post_array['email'];
            $data['password'] =   Hash::make($post_array['password']);
            $data['tpassword'] =   Hash::make($tpassword);
            $data['PSR'] =  $post_array['password'];
            $data['TPSR'] =  $tpassword;
            $data['sponsor'] = $user->id;
            $data['package'] = 0;
            $data['jdate'] = date('Y-m-d');
            $data['created_at'] = Carbon::now();
            $data['remember_token'] = substr(rand(), -7) . substr(time(), -5) . substr(mt_rand(), -4);
            $sponsor_user =  User::orderBy('id', 'desc')->limit(1)->first();
            $data['level'] = $user->level + 1;


            $data['ParentId'] =  $sponsor_user->id;
            $user_data =  User::create($data);
            $registered_user_id = $user_data['id'];
            $user = User::find($registered_user_id);
            // Auth::loginUsingId($registered_user_id);


            sendEmail($user->email, 'Welcome to ' . siteName(), [
                'name' => $user->name,
                'username' => $user->username,
                'password' => $user->PSR,
                'tpassword' => $user->TPSR,
                'viewpage' => 'register_sucess',
                'link' => route('login'),
            ]);



            // return redirect()->route('home');
            return redirect()->route('register_sucess')->with('messages', $user);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }


    public function register22(Request $request)
    {
        try {
            $validation =  Validator::make($request->all(), [
                'email' => 'required',
                'name' => 'required',
                'position' => 'required',
                'password' => 'required|min:5',
                'country_code' => 'required',
                
                'sponsor' => 'required|exists:users,username',
                'phone' => 'required|numeric|min:10'

            ]);


            if ($validation->fails()) {

                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            //check if email exist

            $user = User::where('username', $request->sponsor)->first();
            if (!$user) {
                return Redirect::back()->withErrors(array('Introducer ID Not Active'));
            }



            for ($i = 150; $i < 250; $i++) {

                $totalID = User::count();
                $totalID++;
                $username = substr(time(), 4) . $totalID;
                $username = substr(rand(), -2) . substr(time(), -3) . substr(mt_rand(), -2);

                $tpassword = substr(time(), -2) . substr(rand(), -2) . substr(mt_rand(), -1);
                $post_array  = $request->all();
                //  

                $data['name'] = "Sip fx " . $i;
                $data['phone'] = '1234567890';

                $data['username'] = $username;
                $data['email'] = 'sipfx' . $i . "@gmail.com";
                $data['password'] =   Hash::make($post_array['password']);
                $data['tpassword'] =   Hash::make($tpassword);
                $data['PSR'] =  $post_array['password'];
                $data['position'] = $post_array['position'];
                $data['TPSR'] =  $tpassword;
                $data['sponsor'] = $user->id;
                $data['package'] = 0;
                $data['jdate'] = date('Y-m-d');
                $data['created_at'] = Carbon::now();
                $data['remember_token'] = substr(rand(), -7) . substr(time(), -5) . substr(mt_rand(), -4);
                $this->downline = "";
                $this->find_position($user->id, $post_array['position']);
                $sponsor_user =  $this->downline;
                $data['level'] = $user->level + 1;


                $data['ParentId'] =  $sponsor_user;
                // dd($data);
                $user_data =  User::create($data);
                $registered_user_id = $user_data['id'];
                // $user = User::find($registered_user_id);
                // Auth::loginUsingId($registered_user_id);

                //  sendEmail($user->email, 'Welcome to '.siteName(), [
                //     'name' => $user->name,
                //     'username' => $user->username,
                //     'password' => $user->PSR,
                //     'tpassword' => $user->TPSR,
                //     'viewpage' => 'register_sucess',
                //      'link'=>route('login'),
                // ]);


            }





            // return redirect()->route('home');
            return redirect()->route('register_sucess')->with('messages', $user);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }
}
