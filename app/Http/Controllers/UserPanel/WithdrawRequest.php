<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\Debit;
use App\Models\Payout;
use App\Models\PasswordReset;

use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class WithdrawRequest extends Controller
{
       
    public function payment(Request $request)
    {
      $user=Auth::user();


          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Payout::where('user_id',$user->id);
            
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){         
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('reffrial_income', 'LIKE', '%' . $search . '%')
              ->orWhere('farming_income', 'LIKE', '%' . $search . '%');
            });
        
      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['withdraw_report'] =$notes;
        $this->data['page'] = 'user.withdraw.Withdrawledger';
        return $this->dashboard_layout();
    }

    public function withdrawStatus()
    {
        $withdraws = Withdraw::paginate(10);  // Fetch all records using Eloquent

        return view('user.withdraw.withdrawalstatus', compact('withdraws'));
    }
    public function index()
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.WithdrawRequest';
        return $this->dashboard_layout();
    }


    public function withdrawPrinciple()
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.withdraw-principle';
        return $this->dashboard_layout();
    }

    public function WithdrawRequest(Request $request)
    {
        try {
            // Validate the form inputs
            $validation = Validator::make($request->all(), [
                'amount' => 'required|numeric|min:1000',
                'transaction_password' => 'required',
                'paymentMode' => 'required',
            ], [
                'amount.min' => 'Minimum withdrawal amount is ₹1000.',
            ]);

            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $user = Auth::user();
            $transaction_password = $request->transaction_password;

            // Correct transaction password check
            if (!Hash::check($transaction_password, $user->tpassword)) {
                return Redirect::back()->withErrors(['Invalid Transaction Password']);
            }

            // Check if the user can withdraw 4X of their package
            // $totalDepositSponsor = Investment::where('user_id', $user->id)->where('status', 'Active')->sum('amount');
            // $total_get = ($totalDepositSponsor * 400 / 100) + ($user->extra_amt ?? 0);
            // $totalWithdrawal = $user->withdraw() + $request->amount;

            // if ($totalWithdrawal > $total_get) {
            //     return Redirect::back()->withErrors(['You can\'t withdraw above 4X your Package!']);
            // }

            // Check available balance
            $balance = $user->available_balance();
            if ($balance < $request->amount) {
                // dd($balance);
                return Redirect::back()->withErrors(['Insufficient balance in your account']);
            }

            // Check if the user has already withdrawn today
            $todayWithdraw = Withdraw::where('user_id', $user->id)->where('wdate', date('Y-m-d'))->first();
            if ($todayWithdraw) {
                return Redirect::back()->withErrors(['Withdraw limit per ID is once a day!']);
            }

            // Check if there is an existing pending withdrawal
            $user_detail = Withdraw::where('user_id', $user->id)->where('status', 'Pending')->first();
            if (!empty($user_detail)) {
                return Redirect::back()->withErrors(['Withdraw Request Already Exists!']);
            }

            // Handle account details
            $account = null;
            if ($request->paymentMode == "USDT.BEP20") {
                $account = $user->usdtBep20;
            } elseif ($request->paymentMode == "bank-transfer") {
                $bankDetail = Bank::where('user_id', $user->id)->first();
                if ($bankDetail) {
                    $account = $bankDetail->account_no;
                }
            }

            if (!$account) {
                return Redirect::back()->withErrors(['Please update your payment address']);
            }

            // Create the withdrawal record
            $data = [
                'txn_id' => md5(time() . rand()),
                'user_id' => $user->id,
                'user_id_fk' => $user->username,
                'amount' => $request->amount,
                'account' => $account,
                'status' => 'Pending',
                'payment_mode' => $request->paymentMode,
                'walletType' => 1,
                'wdate' => date("Y-m-d"),
            ];
            Withdraw::create($data);
            // Return success notification
            // Correct way to set the notification
            return redirect()->back()->with('notify', [['success', 'Withdraw Request Submitted Successfully']]);
        } catch (\Exception $e) {
            Log::info('Error in WithdrawRequest');
            Log::info($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred. Please try again later.']);
        }
    }







    // public function WithdrawRequestPrinciple(Request $request)
    // {

    //     try{

    //          $validation =  Validator::make($request->all(), [
    //         'amount' => 'required|numeric|min:20',
    //         'paymentMode' => 'required',    
    //         'transaction_password' => 'required',
    //     ]);

    //     if($validation->fails()) {
    //         Log::info($validation->getMessageBag()->first());

    //         return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
    //     }

    //     $user=Auth::user();
    //     $password= $request->transaction_password;
    //     $balance=Auth::user()->principleBalance();
    //     $account =  $user->trx_addres;
    //     if ($balance>=$request->amount)
    //     {

    //     $todayWitdrw=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();

    //      if($todayWitdrw)
    //      {
    //       return Redirect::back()->withErrors(array('Any Withdraw limit per Id once a day !'));    
    //      }


    //       $todayWitdrwSUm=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
    //      $todayWitdrwSUm=$todayWitdrwSUm+$request->amount;
    //      if($todayWitdrwSUm>=500)
    //      {
    //       return Redirect::back()->withErrors(array('Any Withdraw limit per 500$ once a day !'));    
    //      }


    //      $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

    //      if(!empty($user_detail))
    //      {
    //        return Redirect::back()->withErrors(array('Withdraw Request Already Exist !'));
    //      }
    //      else
    //      {

    //       if(!empty($account))
    //           {
    //           if (Hash::check($password, $user->tpassword))
    //            {

    //                $data = [
    //                     'txn_id' =>md5(time() . rand()),     
    //                     'user_id' => $user->id,
    //                     'user_id_fk' => $user->username,
    //                     'amount' => $request->amount,
    //                     'account' => $account,
    //                     'payment_mode' =>$request->paymentMode,
    //                     'status' => 'Pending',
    //                     'walletType' => 2,
    //                     'wdate' => Date("Y-m-d"),


    //                 ];
    //                $payment =  Withdraw::Create($data);
    //                  $package = $user->package-$request->amount;
    //                  User::where('id',$user->id)->update(['package' => $package]);

    //         $notify[] = ['success','Withdraw Request Submited successfully'];

    //         return redirect()->back()->withNotify($notify);



    //           }
    //             else
    //             {
    //             return Redirect::back()->withErrors(array('Invalid Transaction Password'));
    //             }     

    //           }
    //           else
    //             {
    //             return Redirect::back()->withErrors(array('Please Update Your USDT Payment Address Or Bank Details'));
    //             }  
    //      }

    //     }
    //     else
    //     {
    //  return Redirect::back()->withErrors(array('Insufficient balance in Your account'));
    //     }

    // }
    // catch(\Exception $e){
    //  Log::info('error here');
    //  Log::info($e->getMessage());
    //  print_r($e->getMessage());
    //  die("hi");
    //  return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
    //    }




    // }


    public function WithdrawHistory(Request $request)
    {

        $user = Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::where('user_id', $user->id);
        if ($search <> null && $request->reset != "Reset") {
            $notes = $notes->where(function ($q) use ($search) {
                $q->Where('wdate', 'LIKE', '%' . $search . '%')
                    ->orWhere('amount', 'LIKE', '%' . $search . '%')
                    ->orWhere('status', 'LIKE', '%' . $search . '%')
                    ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
            });
        }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit]);
        $this->data['search'] = $search;
        $this->data['withdraw_report'] = $notes;
        $this->data['page'] = 'user.withdraw.WithdrawHistory';
        return $this->dashboard_layout();
    }

    public function debitReport(Request $request)
    {

        $user = Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Debit::where('user_id', $user->id);
        if ($search <> null && $request->reset != "Reset") {
            $notes = $notes->where(function ($q) use ($search) {
                $q->Where('wdate', 'LIKE', '%' . $search . '%')
                    ->orWhere('amount', 'LIKE', '%' . $search . '%')
                    ->orWhere('status', 'LIKE', '%' . $search . '%')
                    ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
            });
        }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

        $this->data['search'] = $search;
        $this->data['withdraw_report'] = $notes;
        $this->data['page'] = 'user.withdraw.debit';
        return $this->dashboard_layout();
    }

    public function withdrawInfo()
    {
        return view('user.withdraw.withdrawalinfo');
    }
}
