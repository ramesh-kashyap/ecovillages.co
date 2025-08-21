<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserLogin;



class Login extends Controller
{

    public function loginAction(Request $request)
    {

        try {
            // Step 1: Validate Input

            // dd($request->al++l());
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

            dd($e->getMessage());
            Log::error("Unexpected Error During Login", [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString(),
                'input' => $request->all(),
            ]);
        }
    }
    // public function loginAction(Request $request)
    // {
    //     try {
    //         // Simple validation
    //         $request->validate([

    //         ]);
    //        $validation =  Validator::make($request->all(), [
    //           'username' => 'required',
    //             'password' => 'required',        ]);

    //         if($validation->fails()) {
    //             Log::info($validation->getMessageBag()->first());

    //             return redirect()->route('login')->withErrors($validation->getMessageBag()->first())->withInput();
    //         }
    //         $credentials = $request->only('username', 'password');

    //         if (Auth::attempt($credentials)) {
    //             // Login successful
    //             return redirect()->route('user.dashboard')->with('success', 'Login successful!');
    //         } else {
    //             // Login failed
    //             return redirect()->back()->withErrors(['Invalid username or password']);
    //         }
    //     } catch (\Exception $e) {
    //         // Log the error or handle it as needed
    //         Log::error('Login error: '.$e->getMessage());

    //         return redirect()->back()->withErrors(['Something went wrong. Please try again later.']);
    //     }
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



    public function forgot_password_submit(Request $request)
    {
        $validation =  Validator::make($request->all(), [
            'username' => 'required|unique:users',

        ]);


        $credentials = User::where('username', $request->username)->first();

        if ($credentials) {

            $userIpInfo = getIpInfo();
            $userBrowserInfo = osBrowser();
            $code = verificationCode(6);

            PasswordReset::where('email', $credentials->email)->delete();

            $password = new PasswordReset();
            $password->email = $credentials->email;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();

            sendEmail($credentials->email, 'Recovery Password', [
                'name' => $credentials->name,
                'browser' => @$userBrowserInfo['browser'],
                'ip' => @$userIpInfo['ip'],
                'time' => @$userIpInfo['time'],
                'operating_system' => @$userBrowserInfo['os_platform'],
                'code' => $code,
                'viewpage' => 'forgot_sucess',

            ]);

            $page_title = 'Account Recovery';
            $userID = $credentials->id;
            session()->put('pass_res_mail', $userID);
            $notify[] = ['success', 'Password reset email sent successfully'];
            return redirect()->route('codeVerify')->withNotify($notify);
        } else {
            $notify[] = ['error', 'Invalid Username '];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
    }

    public function codeVerify()
    {
        $page_title = 'Account Recovery';
        $userID = session()->get('pass_res_mail');

        $user_name = session()->get('username');

        if (!$userID) {
            $notify[] = ['error', 'Opps! session expired'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        return view('auth.passwords.confirm', compact('page_title', 'userID', 'user_name'));
    }


    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required', 'userID' => 'required']);
        $code = $request->code;
        $userDetail = User::where('id', $request->userID)->first();

        if (PasswordReset::where('token', $code)->where('email', $userDetail->email)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
        $notify[] = ['success', 'You can change your password.'];
        session()->flash('fpass_email', $request->userID);
        session()->put('resetMail', $request->userID);
        return redirect()->route('resetPassword', $code)->withNotify($notify);
    }


    public function resetPassword()
    {
        $page_title = "Forgot Password";
        //   dd("hi");
        return view('auth.passwords.resetPassword', compact('page_title'));
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
}
