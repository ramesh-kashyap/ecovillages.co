<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\BuyFund;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Invest extends Controller
{



  private $downline = "";

  public function index()
  {
    $user = Auth::user();
    $invest_check = Investment::where('user_id', $user->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();

    $this->data['last_package'] = ($invest_check) ? $invest_check->amount : 0;
    $this->data['page'] = 'user.invest.deposit';
    return $this->dashboard_layout();
  }
  public function topup()
  {

    $this->data['page'] = 'user.invest.topup';
    return $this->dashboard_layout();
  }


  public function autoinvest()
  {
    $user = Auth::user();
    $invest_check = Investment::where('user_id', $user->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();

    $this->data['last_package'] = ($invest_check) ? $invest_check->amount : 0;
    $this->data['page'] = 'user.invest.autoinvest';
    return $this->dashboard_layout();
  }


public function transaction()
{
  $user = Auth::user();
    $invest_check = Investment::where('user_id', $user->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();

    $this->data['last_package'] = ($invest_check) ? $invest_check->amount : 0;
    $this->data['page'] = 'user.transactions';
    return $this->dashboard_layout();
    
    
}


  //     public function confirmDeposit(Request $request)
  //     {
  //    try{
  //      $validation =  Validator::make($request->all(), [
  //         // 'amount' => 'required|numeric|min:30',
  //         // 'paymentMode' => 'required',
  //      ]);


  //     //  dd($request->all());
  //     if($validation->fails()) {
  //         Log::info($validation->getMessageBag()->first());

  //         return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
  //     }




  //     $user=Auth::user();
  //     $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

  //     if ($invest_check) 
  //     {
  //       return Redirect::back()->withErrors(array('your deposit already pending'));
  //     }
  //     if (empty($request->DepositForm)) 
  //     {
  //       return Redirect::back()->withErrors(array('something went wrong'));
  //     }

  //     $min_amount = $request->min_amount;
  //     $max_amount = $request->max_amount;
  //     $plan = $request->DepositForm['id_plan'];
  //     $paymentMode = $request->DepositForm['id_wallet'];
  //     $amount = $request->DepositForm['amount'];


  //     if ($amount<$min_amount || $amount>$max_amount) 
  //     {
  //       return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
  //     }

  //     $walletAddress= generalDetail()->usdtTrc20;
  //     if ($paymentMode=="USDT.TRC20") 
  //     {
  //       $walletAddress= generalDetail()->usdtTrc20;
  //     }
  //     if ($paymentMode=="USDT.BEP20") 
  //     {
  //       $walletAddress= generalDetail()->usdtBep20;
  //     }


  //     $this->data['walletAddress'] = $walletAddress;
  //     $this->data['paymentMode'] =$paymentMode;
  //     $this->data['plan'] =$plan;
  //     $this->data['amount'] =$amount;
  //     $this->data['page'] = 'user.invest.confirmDeposit';
  //     return $this->dashboard_layout();



  //   }
  //    catch(\Exception $e){
  //     Log::info('error here');
  //     Log::info($e->getMessage());
  //     print_r($e->getMessage());
  //     die("hi");
  //     return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
  //       }

  //  }

  public function confirmDeposit(Request $request) 
  { 
    $request->validate([
       'amount' => 'required',
       'paymentMode' => 'required',
    ]);
    // $network = $request->network;
    $amount = $request->amount;
     $paymentMode = $request->paymentMode;


  if ($paymentMode == "INR") {
    $walletAddress = null;
    $bankDetails = DB::table('general_settings')
        ->select('account_no', 'ifsc_code', 'branch_name', 'bank_name')
        ->first();
} else {
    $walletAddress = DB::table('general_settings')->value('usdtBep20');
    $bankDetails = null;
}

    return view('user.invest.confirmDeposit', [
      'amount' => $amount,
    //   'network' => $network,
      'wallet_address' => $walletAddress,
      'bankDetails' => $bankDetails,
    'paymentMode' =>$paymentMode

      
    ]);
  }




  //     public function fundActivation(Request $request)
  //     {

  //   try{

  //     $validation =  Validator::make($request->all(), [
  //         'amount' => 'required|numeric|min:20',
  //         'username' => 'required|exists:users,username',
  //     ]);

  //     if($validation->fails()) {
  //         Log::info($validation->getMessageBag()->first());

  //         return redirect()->route('user.autoinvest')->withErrors($validation->getMessageBag()->first())->withInput();
  //     }

  //     $min_amount =50;
  //     $max_amount = 4999;
  //     $amount= $request->amount;

  //     if($amount!=20)
  //     {
  //       if ($amount<$min_amount || $amount>$max_amount) 
  //     {
  //       return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
  //     }

  //     }





  //        $user=Auth::user();
  //        $paymentMode = "USDT.BEP20";
  //        $plan="1";

  //        $user_detail=User::where('username',$request->username)->orderBy('id','desc')->limit(1)->first();

  //        if(!$user_detail)
  //        {
  //          return Redirect::back()->withErrors(array('User ID not Exists!'));   
  //        }


  //         $balance=round(Auth::user()->available_balance(),2);

  //    if ($balance>=$amount)
  //      {


  //        $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
  //        $invoice = substr(str_shuffle("0123456789"), 0, 7);

  //          $last_package = ($invest_check)?$invest_check->amount:0;


  //       if ($last_package>=$amount)
  //       {
  //         return Redirect::back()->withErrors(array('Please choose amount above last package $ '.$last_package));
  //       }



  //        $joining_amt = $amount;
  //        $planId=0;
  //         $plan ='BEGINNER';
  //        if ($joining_amt>=50 && $joining_amt<=199) 
  //        {
  //         $plan ='BEGINNER';
  //         $planId= 5;
  //        }
  //        elseif($joining_amt>=200 && $joining_amt<=499)
  //        {
  //         $plan ='BRONZE';
  //          $planId= 6;
  //        }
  //        elseif($joining_amt>=500 && $joining_amt<=1999)
  //        {
  //         $plan ='SILVER';
  //          $planId= 7;
  //        }
  //        elseif($joining_amt>=2000 && $joining_amt<=3999)
  //        {
  //         $plan ='GOLD';
  //          $planId= 9;
  //        }

  //        elseif($joining_amt>=4000 && $joining_amt<=4999)
  //        {
  //         $plan ='PLATINUM';
  //          $planId= 10;
  //        }

  //        elseif($joining_amt>=5000)
  //        {
  //         $plan ='PLATINUM';
  //         $planId= 10;
  //        }

  //            $data = [
  //                 'plan' => $plan,
  //                 'transaction_id' =>md5(uniqid(rand(), true)),
  //                 'user_id' => $user_detail->id,
  //                 'user_id_fk' => $user_detail->username,
  //                 'amount' => $amount,

  //                 'status' => 'Active',
  //                 'percentage'=>$planId,
  //                 'sdate' => Date("Y-m-d"),
  //                 'active_from' => $user->username,
  //                 'walletType' => 1,
  //             ];
  //             $payment =  Investment::insert($data);

  //         if ($user_detail->active_status=="Pending")
  //           {   
  //            $user_update=array('acctive_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount,'rank'=>0);
  //           User::where('id',$user_detail->id)->update($user_update);
  //          }
  //          else
  //          {
  //            $total=$user_detail->package+$amount;
  //             $user_update=array('package'=>$total,'active_status'=>'Active');
  //           User::where('id',$user_detail->id)->update($user_update); 
  //          }
  //          add_direct_income($user_detail->id,$amount);



  //         $notify[] = ['success','Deposit successfully'];
  //         return redirect()->route('user.autoinvest')->withNotify($notify);

  //      }
  //       else
  //       {
  //          return Redirect::back()->withErrors(array('Insufficient Balance in Wallet'));
  //       }

  //   }
  //    catch(\Exception $e){
  //     Log::info('error here');
  //     Log::info($e->getMessage());
  //     print_r($e->getMessage());
  //     die("hi");
  //     return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
  //       }

  //  }


public function fundActivation(Request $request)
{
    try {      
        // ✅ Validation
        $validation = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'paymentMode' => 'required',
            'utrno' => 'required',
        ]);

        if ($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
            return redirect()
                ->route('user.invest')
                ->withErrors($validation->getMessageBag()->first())
                ->withInput();
        }

        // ✅ Current logged-in user
        $user = Auth::user();
        $user_detail = User::where('username', $user->username)
            ->orderBy('id', 'desc')
            ->first();

        // ✅ Latest investment check
        $invest_check = BuyFund::where('user_id', $user_detail->id)
            ->where('status', '!=', 'Decline')
            ->orderBy('id', 'desc')
            ->first();

        $invoice = substr(str_shuffle("0123456789"), 0, 7);
        $joining_amt = $request->amount;
        $last_package = $invest_check ? $invest_check->amount : 0;

        // ✅ Handle file upload
        if ($request->hasFile('account')) {           
            $image = $request->file('account');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/'), $imageName);
        } else {
            $imageName = null;
        }

        // ✅ Store in DB
        $data = [
            'utrno'         => $request->utrno,
            'user_id'       => $user_detail->id,
            'user_id_fk'    => $user_detail->username,
            'amount'        => $request->amount,
            'type'          => $request->paymentMode,
            'status'        => 'Pending',
            // 'payment_mode'  => $request->paymentMode, 
            'slip'          => $imageName,
            'sdate'         => date("Y-m-d"),
        ];

        BuyFund::insert($data);

        // ✅ Success message
        $notify[] = ['success', 'Your fund request has been submitted successfully'];
        return redirect()->route('user.invest')->withNotify($notify);

    } catch (\Exception $e) {
        Log::info('error here');
        Log::info($e->getMessage());
        return redirect()
            ->route('user.invest')
            ->withErrors($e->getMessage())
            ->withInput();
    }
}





public function confirmTopup(Request $request)
{
try {

$request->validate([
'amount' => 'required|numeric|min:10000',
'transaction_password' => 'required',
'remarks' => 'nullable|string|max:255',
'payment_mode' => 'nullable|string|max:255',

]);


$user = Auth::user();

$password = $request->transaction_password;
if (!Hash::check($password, $user->tpassword)) {
    return back()->withErrors(['Invalid Transaction Password!'])->withInput();
}


$balance = $user->FundBalance();
if ($balance < $request->amount) {
    // dd($balance);
    return Redirect::back()->withErrors(['Insufficient balance in your account']);
    }


    if($balance>=$request->amount){

    DB::table('investments')->insert([
    'user_id' => $user->id,
    'user_id_fk' => $user->username, // ✅ You must have this column in your DB
    'amount' => $request->amount,
    'status' => 'Active',
    'payment_mode' => $request->payment_mode,

    'remarks' => $request->remarks,
    'active_from' => $user->username, // ✅ You must have this column in your DB
    'sdate' => now(),
    'walletType' => 1,
    ]);


    if ($user->active_status === 'Pending') {
    $user->update([
    'active_status' => 'Active',
    'adate' => now(),
    'package' => $request->amount,
    'rank' => 0,
    ]);
    } else {
    $user->increment('package', $request->amount);
    }
    
     add_direct_income_new($user->id,$request->amount);

    }
    $notify[] = ['success' , 'User Activation successful'];
    return redirect()->route('user.topup')->withNotify($notify);

    } catch (\Exception $e) {
    return back()->withErrors(['error' => $e->getMessage()])->withInput();
    }
    }

  public function invest_list(Request $request)
  {

    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = BuyFund::where('user_id', $user->id);
    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['deposit_list'] = $notes;
    $this->data['page'] = 'user.invest.DepositHistory';
    return $this->dashboard_layout();
  }
  public function topup_list(Request $request)
  {

    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = Investment::where('user_id', $user->id);
    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['deposit_list'] = $notes;
    $this->data['page'] = 'user.invest.topupHistory';
    return $this->dashboard_layout();
  }
}
