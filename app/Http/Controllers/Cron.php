<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\Transaction;
use App\Models\Fundtransfer;
use App\Models\Reward;
use Illuminate\Support\Facades\Log;
use App\Models\Payout;
use App\Models\Withdraw;
use App\Models\Trade;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;



class Cron extends Controller
{
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}



  public function index2()
    {  

     date_default_timezone_set("Asia/Kolkata"); 
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->get();

    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $balance=$value->balance;
   $adate_date =$value->adate;
     $todays=date("Y-m-d");
 
       $todaydatetime=date("Y-m-d H:i:s");
     $colume_req=array('0','referral_income','farming_income','reccuring_income','reward_income');
     $remarks_req=array('0','Referral Income','Farming Income','Recurring Income','Reward Income');
     $checkPayout=Payout::where('user_id',$userID)->first(); 
    $tran_check=Payout::where('user_id',$userID)->where('ttime',date("Y-m-d"))->count(); 

    $previous_date = date('Y-m-d', strtotime($todays. ' - 15 day'));
    if(!$checkPayout)
    {
      if($adate_date<$previous_date) 
      {
      $candition=true;    
      }
      else
      {
       $candition=false;        
      }
    }
    else
    {
        $candition=true;
    }
    
    
    if($candition)
    {
        
     if ($tran_check<=0) 
     {
              echo "count :".$counter."<br>";
          echo $userName."<br>";
                    // echo "level : ".$p."<br>";
               
                  
              
          $income_insert['user_id']=$userID;
          $income_insert['user_id_fk']=$userName;
       
          $income_insert['ttime']=$todays;
          $income_insert['created_at']=$todaydatetime;
          $income_insert['payout_date']=$todaydatetime;
          $income_insert['updated_at']=$todaydatetime;
        
          $order_id=Payout::create($income_insert); 
        //   Payout::firstOrCreate(['wdate'=>$todays,'user_id'=>$userID],$income_with);
          $lastInsertedID = $order_id->id;
         echo "<br>";    

         for ($p=1; $p < 5; $p++) 
         { 
           # code...
         $remarks=$remarks_req[$p];
         $colume=$colume_req[$p];
         $last_ttime=Payout::where('user_id',$userID)->orderBy('id', 'DESC')->skip(1)->take(1)->first(); 
         
       
        // print_r($last_ttime->ttime);die;
        //  if (!empty($last_ttime) && $last_ttime->ttime<$todays) 
        //  { 
             
            //   print_r($last_ttime->ttime);die;
           $amount_rmarks=Income::where('user_id',$userID)->where('remarks',$remarks)->sum('comm');
           $withdraw_remark=Payout::where('user_id',$userID)->sum($colume);
           $amount_to =  floatval($amount_rmarks) - floatval($withdraw_remark);
        
           $total_amount2=Income::where('user_id',$userID)->sum('comm');
           $withdrawTotal=Payout::where('user_id',$userID)->sum('total');
           $total_amount =  floatval($total_amount2) - floatval($withdrawTotal);
           $payable_amount22 = floatval($total_amount2) - floatval($withdrawTotal);
           

        //  }
        //  else
        //  {
          
        //   $amount_to=Income::where('user_id',$userID)->where('ishold',0)->where('remarks',$remarks)->sum('comm');
        //   $total_amount=Income::where('user_id',$userID)->where('ishold',0)->sum('comm');
        //   $payable_amount=Income::where('user_id',$userID)->where('ishold',0)->sum('comm');
           

        //  }
          

         $amount=($amount_to)?$amount_to:0;
         $total_amount=$total_amount;
         
       
         
         $deduction=$payable_amount22*10/100;
          $payable_amount=$payable_amount22-$deduction;

           $colume=$colume_req[$p];
          $payable_amount2= $payable_amount ;
       


       if($payable_amount2>=100)
       {
           
          $income_insert2=array('user_id'=>$userID,$colume=>$amount,'deduction'=>$deduction,'withdraw_amt'=>$payable_amount,'payable_amt'=>$payable_amount);
        
        if($p=="1")
        {
          $income_insert2=array('user_id'=>$userID,$colume=>$amount,'deduction'=>$deduction,'withdraw_amt'=>$payable_amount,'payable_amt'=>$payable_amount,'total'=>$total_amount);   
        }
        
        
        Payout::where('id',$lastInsertedID)->orderBy('id', 'DESC')->limit(1)->update($income_insert2);
        
             $payable_amount=$payable_amount;
            //   echo $payable_amount;die;
            
            
             
            if ($p=="1" && $payable_amount>=20) 
            {
               
            $income_with=array('user_id_fk'=>$userName,'user_id'=>$userID,'amount'=>$payable_amount,'amt'=>$total_amount,'status'=>'Pending','payment_mode'=>"INR",'wdate'=>$todays,'created_at'=>$todaydatetime);
           
            //  Withdraw::create($income_with); 
            Withdraw::firstOrCreate(['wdate'=>$todays,'user_id'=>$userID],$income_with);
          User::where('id', $userID)
               ->update([
                   'balance' => 0
                ]);   
            }
     
            
           }
           else
           {
            if($p=="1")
             {
            Payout::where('id',$lastInsertedID)->orderBy('id', 'DESC')->limit(1)->delete();   
              }
           }
            

         }
     }    
     
    }
    

     $counter++;   
     }
    } 

   }

public function index()
{
    date_default_timezone_set("Asia/Kolkata");

    $today     = Carbon::now('Asia/Kolkata');
    $todayDate = $today->toDateString();
    $nowTs     = $today->toDateTimeString();

    // Run only on 15th or month-end
    $is15th     = ($today->day === 17);
    $isMonthEnd = $today->isLastOfMonth();
    if (!($is15th || $isMonthEnd)) {
        return response()->json(['ok' => true, 'message' => 'Not a closing day (15th / month-end)']);
    }
    $closingType = $isMonthEnd ? 'end' : 'mid';

    // Configure which remarks/columns to include on each closing
    // column => [remark, deductionRate]
    $allTypes = [
        'referral_income'  => ['Referral Income',   0.10],
        'reccuring_income' => ['Recurring Income',  0.10],
        'farming_income'   => ['Farming Income',    0.02], // <-- 2%
        'reward_income'    => ['Reward Income',     0.10],
        'salary_income'    => ['Salary Income',     0.10],
    ];

    // 15th: exclude Farming & Reward; Month-end: include all
    $types = $closingType === 'mid'
        ? array_intersect_key($allTypes, array_flip(['referral_income','reccuring_income']))
        : $allTypes;

    $users = User::where('active_status','Active')->orderBy('id','ASC')->get();
    $counter = 1;

    foreach ($users as $user) {
        $userID   = $user->id;
        $userName = $user->username;
        $adate    = $user->adate; // Y-m-d
        $previous = Carbon::parse($todayDate)->subDays(15)->toDateString();
          echo "Processing User: {$userName} (ID: {$userID})<br>";
        // One payout per user per day
        if (Payout::where('user_id',$userID)->whereDate('ttime',$todayDate)->exists()) {
            continue;
        }

        // Your original eligibility
        $hasAnyPayout = Payout::where('user_id',$userID)->exists();
        // $canProcess   = $hasAnyPayout ? true : ($adate < $previous);
        // if (!$canProcess) continue;

        
        // last payout timestamp for this user (nullable)
        $lastPayoutAt = Payout::where('user_id', $userID)->max('created_at'); // ttime is Y-m-d
        // build a proper datetime lower bound
        $from = $lastPayoutAt ? Carbon::parse($lastPayoutAt)->startOfDay()->toDateTimeString()
                              : Carbon::parse($user->adate ?: '2025-03-13 00:20:00')->startOfDay()->toDateTimeString();
                              
        // Create base payout row
        $payout = Payout::create([
            'user_id'     => $userID,
            'user_id_fk'  => $userName,
            'ttime'       => $todayDate,
            'created_at'  => $nowTs,
            'updated_at'  => $nowTs,
            'payout_date' => $nowTs,
        ]);

        // Accumulators (per-remark nets add up to withdraw/payable)
        $sumGross = 0.0;
        $sumDed   = 0.0;
        $sumNet   = 0.0;

        // We’ll update the same payout row with each column’s gross amount
        $updateCols = ['user_id' => $userID];
        
        $labels = array_column($types, 0);

        // dd($labels);

        foreach ($types as $col => [$remark, $rate]) {
            // total earned for this remark
            $earned = (float) Income::where('user_id',$userID)
                        ->where('created_at','>=',$from)->where('created_at','<=','2025-08-15 23:55:31')
                        ->where('remarks',$remark)
                        ->sum('comm');

            // already recorded (withdrawn) for this remark in payouts
            $already = (float) Payout::where('user_id',$userID)->sum($col);

            $grossForThis = max(0, $earned - $already);              // new amount eligible for this closing
            $dedForThis   = $grossForThis * $rate;                    // 2% for Farming, 10% otherwise
            $netForThis   = $grossForThis - $dedForThis;

            // accumulate
            $sumGross += $grossForThis;
            $sumDed   += $dedForThis;
            $sumNet   += $netForThis;

            // write the gross to the per-remark column
            $updateCols[$col] = $grossForThis;
        }
         echo "  ➜ Total Deduction = {$sumDed}, Net Payable = {$sumNet}<br>";
        // If below minimum, remove payout and skip
        if ($sumNet < 1000) {
            Payout::where('id',$payout->id)->delete();
            continue;
        }

        // Also compute running "total" like your original: total income – total withdraw so far
        $totalIncomeAll   = (float) Income::where('user_id',$userID)->whereIn('remarks',$labels)
                        ->where('created_at','>=',$from)->where('created_at','<=','2025-08-15 23:55:31')->sum('comm');
        $withdrawTotalAll = (float) Payout::where('user_id',$userID)->sum('total');
        $runningTotal     = max(0, $totalIncomeAll - $withdrawTotalAll);

        // finalize update on payout row
        $updateCols = array_merge($updateCols, [
            'deduction'    => $sumDed,
            'withdraw_amt' => $sumNet,
            'payable_amt'  => $sumNet,
            'total'        => $runningTotal, // keep same semantics you had
            'updated_at'   => $nowTs,
        ]);

        Payout::where('id',$payout->id)->update($updateCols);

        // Create/ensure Withdraw once if sumNet >= 20 (your rule)
        if ($sumNet >= 1000) {
            $income_with = [
                'user_id_fk'   => $userName,
                'user_id'      => $userID,
                'amount'       => $sumNet,          // net (after all per-remark deductions)
                'amt'          => $runningTotal,    // your existing "amt" field usage
                'status'       => 'Pending',
                'payment_mode' => 'INR',
                'wdate'        => $todayDate,
                'created_at'   => $nowTs,
            ];
            Withdraw::firstOrCreate(
                ['wdate' => $todayDate, 'user_id' => $userID],
                $income_with
            );

            // reset balance (same as your code)
        }

        $counter++;
    }

  
}


public function add_level_income($user_id, $amt)
{
    $levelPercentages = [
        1 => 10, 2 => 5, 3 => 3, 4 => 1, 5 => 1
    ];

    for ($i = 6; $i <= 20; $i++) {
        $levelPercentages[$i] = 0.50;
    }

    for ($i = 21; $i <= 40; $i++) {
        $levelPercentages[$i] = 1;
    }

    $user = User::find($user_id);
    if (!$user) return false;

    $fullname = $user->name;
    $rname = $user->username;
    $amount = $amt / 100;
    $currentUserId = $user_id;
    $cnt = 1;
    $prevLevelOpened = true;

    while ($currentUserId && $currentUserId != "1" && $cnt <= 40) {
        $sponsorData = User::find($currentUserId);
        if (!$sponsorData) break;

        $sponsorId = $sponsorData->sponsor;
        $sponsorStatus = User::find($sponsorId);

        $teamA = $sponsorStatus->teamA ?? 0;
        $teamB = $sponsorStatus->teamB ?? 0;
        $otherTeam = $sponsorStatus->other_team ?? 0;
        $sponsorCount = User::where('sponsor', $sponsorId)->where('active_status', 'Active')->count();

        $canProceed = false;

        if ($cnt == 1 && $sponsorCount >= 1) {
            $canProceed = true;
        } elseif ($cnt == 2 && $sponsorCount >= 2 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt == 3 && $sponsorCount >= 3 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 4 && $cnt <= 6 && $sponsorCount >= 3 && $teamA >= 110000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 7 && $cnt <= 9 && $sponsorCount >= 3 && $teamA >= 110000 && $teamB >= 110000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 10 && $cnt <= 12 && $sponsorCount >= 3 && $teamA >= 110000 && $teamB >= 110000 && $otherTeam >= 60000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 13 && $cnt <= 21 && $teamA >= 410000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 22 && $cnt <= 30 && $teamA >= 410000 && $teamB >= 410000 && $prevLevelOpened) {
            $canProceed = true;
        } elseif ($cnt >= 31 && $cnt <= 39 && $teamA >= 410000 && $teamB >= 410000 && $otherTeam >= 160000 && $prevLevelOpened) {
            $canProceed = true;
        }

        if ($canProceed && isset($levelPercentages[$cnt]) && $sponsorStatus->active_status=="Active") {
            $pp = $amount * $levelPercentages[$cnt];

            Income::create([
                'user_id' => $sponsorStatus->id,
                'user_id_fk' => $sponsorStatus->username,
                'amt' => $amt,
                'comm' => $pp,
                'remarks' => 'Recurring Income',
                'level' => $cnt,
                'rname' => $rname,
                'fullname' => $fullname,
                'ttime' => date("Y-m-d"),
            ]);

            $prevLevelOpened = true; // Allow next level
        } else {
            $prevLevelOpened = false; // Stop if condition not met
        }

        $currentUserId = $sponsorId;
        $cnt++;
    }

    return true;
}


public function generate_roi()
{  

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");

if ($allResult) 
{
 foreach ($allResult as $key => $value) 
 {
  
  $userID=$value->user_id;
   $joining_amt = $value->amount;
 
  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails) 
  {
     $total_profit_b = Income::where('user_id', $userID)->where('invest_id', $value->id)->where('remarks','Farming Income')->sum("comm");
      $total_profit=($total_profit_b)?$total_profit_b:0;
        $sponsor_cnt = User::where('sponsor',$userID)->where('active_status','Active')->count();
       $total_get=$joining_amt*200/100;        

        
        $roi = ($joining_amt * 6) / 100; // 5% Monthly ROI
        $roi2 = ($joining_amt * 4) / 100; // 4% Monthly ROI
        
        $roi = round($roi/30,4);
        $roi2 = round($roi2/30,4);
        
        
         $max_income=$total_get;
        $n_m_t = $max_income - $total_profit;
        // dd($total_received);
          if($roi >= $n_m_t)
          {
              $roi = $n_m_t;
          }  
          if ($total_profit<$total_get && $roi>0) 
          {
     
             $today = date("Y-m-d");
            $todayRoiCount = Income::where('invest_id', $value->id)
                ->where('remarks', 'Farming Income')
                ->where('ttime', $today)
                ->count();
    
              if(!$todayRoiCount)
              {
                echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
                 $data['remarks'] = 'Farming Income';
                $data['comm'] = $roi;
                $data['amt'] = $joining_amt;
                $data['invest_id']=$value->id;
                $data['level']=1;
                $data['ttime'] = date("Y-m-d");
                $data['user_id_fk'] = $userDetails->username;
                $data['user_id']=$userDetails->id; 
              $income = Income::firstOrCreate(['remarks' => 'Farming Income','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);  
                 $this->add_level_income($userDetails->id, $roi2);
              }
               
               
          }
          else
          {
          Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
          }



  }
  




 }
} 




}


//farming income 
public function distributefarmingIncome()
{
    $today = Carbon::today();
    $users = User::where('active_status', 'Active')->get();

    foreach ($users as $user) {
        // Prevent duplicate distribution for this month
        $alreadyGiven = Income::where('user_id', $user->id)
                              ->where('remarks', 'Farming Income')
                              ->whereMonth('ttime', $today->month)
                              ->whereYear('ttime', $today->year)
                              ->exists();

        if ($alreadyGiven) continue;

        // Get user's first investment
        $firstInvestment = Investment::where('user_id', $user->id)
                                     ->where('status', 'Active')
                                     ->orderBy('created_at', 'asc')
                                     ->first();

        if (!$firstInvestment) continue;

        $firstInvMonth = Carbon::parse($firstInvestment->created_at)->format('Y-m');
        $currentMonth = $today->format('Y-m');
        $daysInMonth = $today->daysInMonth;

        // Total investment amount (active)
        $totalInvestment = Investment::where('user_id', $user->id)
                                     ->where('status', 'Active')
                                     ->sum('amount');

        // ✅ First month logic
        if ($firstInvMonth === $currentMonth) {
            $monthlyROI = 0;

            // Fetch only investments made in this month
            $firstMonthInvestments = Investment::where('user_id', $user->id)
                                               ->where('status', 'Active')
                                               ->whereMonth('created_at', $today->month)
                                               ->whereYear('created_at', $today->year)
                                               ->get();

            foreach ($firstMonthInvestments as $inv) {
                $invDate = Carbon::parse($inv->created_at);
                $activeDays = $invDate->diffInDays($today) + 1;
                if ($activeDays > $daysInMonth) $activeDays = $daysInMonth;

                $dailyROI = (4 / 100) / $daysInMonth; // 4% divided by days
                $monthlyROI += $inv->amount * $dailyROI * $activeDays;
            }

            if ($monthlyROI > 0) {
                Income::create([
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amt' => $totalInvestment,
                    'comm' => $monthlyROI,
                    'remarks' => 'Farming Income',
                    'ttime' => $today->toDateString(),
                    'level' => 1,
                ]);
            }

        } else {
            // ✅ From second month onward: flat 4% of total investment
            $roi = $totalInvestment * (4 / 100);

            if ($roi > 0) {
                Income::create([
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amt' => $totalInvestment,
                    'comm' => $roi,
                    'remarks' => 'Farming Income',
                    'ttime' => $today->toDateString(),
                    'level' => 1,
                ]);
                // Now distribute farming bonus to sponsors
            $this->distributeReccuringIncome($user, $roi, $today);
            }
        }
    }
}

private function distributeReccuringIncome($user, $farmingIncome, $today)
{
    $sponsorId = $user->sponsor;
    $level = 1;
    $baseIncome = $farmingIncome;

    $commissionRates = [
        1 => 10, // 10%
        2 => 5,  // 5%
        3 => 3,  // 3%
    ];

    while ($sponsorId && $level <= 40) {
        $sponsor = User::where('id', $sponsorId)
                       ->where('active_status', 'Active')
                       ->first();

        if (!$sponsor) break;

        // Check if sponsor has 3 or more active direct referrals
        $directReferrals = User::where('sponsor', $sponsor->id)
                               ->where('active_status', 'Active')
                               ->count();

        if ($directReferrals < 3) break;

        $commissionPercent = $commissionRates[$level] ?? 0;
        $commissionAmount = $baseIncome * ($commissionPercent / 100);

        if ($commissionAmount > 0) {
            Income::create([
                'user_id' => $sponsor->id,
                'user_id_fk' => $sponsor->username,
                'amt' => $baseIncome,
                'comm' => $commissionAmount,
                'remarks' => "Reccuring Income",
                'ttime' => $today->toDateString(),
                'level' => $level,
            ]);
        }

        $baseIncome = $commissionAmount;
        $sponsorId = $sponsor->sponsor;
        $level++;
    }
}

public function processWithdrawals()
{
    date_default_timezone_set("Asia/Kolkata");

    $allUsers = User::where('active_status', 'Active')->orderBy('id', 'ASC')->get();
    $today = date("Y-m-d");
    $now = date("Y-m-d H:i:s");
    $previousDate = date('Y-m-d', strtotime($today . ' - 7 days'));

    if ($allUsers) {
        $counter = 1;

        foreach ($allUsers as $user) {
            $userID = $user->id;
            $username = $user->username;
            $activationDate = $user->adate;

            $existingPayoutToday = Payout::where('user_id', $userID)->where('ttime', $today)->count();
            $hasAnyPayout = Payout::where('user_id', $userID)->exists();

            $isEligible = (!$hasAnyPayout && $activationDate < $previousDate) || $hasAnyPayout;

            if ($isEligible && $existingPayoutToday == 0) {
                echo "count: $counter<br>";
                echo "$username<br>";

                // Step 1: Insert basic payout record
                $payout = Payout::create([
                    'user_id'     => $userID,
                    'user_id_fk'  => $username,
                    'ttime'       => $today,
                    'created_at'  => $now,
                    'updated_at'  => $now,
                    'payout_date' => $now,
                ]);

                $payoutId = $payout->id;

                // Define income types and column names
                $remarksList = ['Referral Income', 'Farming Income', 'Reccuring Income'];
                $columnNames = ['referral_income', 'farming_income', 'reccuring_income'];

                // Calculate total income and previous total payout
                $totalIncome = Income::where('user_id', $userID)->sum('comm');
                $totalPayout = Payout::where('user_id', $userID)->sum('total');

                $payableTotal = floatval($totalIncome) - floatval($totalPayout);
                $deduction = $payableTotal * 0.05; // 5% deduction
                $serviceCharge = $payableTotal * 0.05; // 5% service charge
                $withdrawAmount = $payableTotal - ($deduction + $serviceCharge);


                $updateData = [];

                for ($i = 0; $i < 3; $i++) {
                    $remark = $remarksList[$i];
                    $column = $columnNames[$i];

                    $incomeSum = Income::where('user_id', $userID)->where('remarks', $remark)->sum('comm');
                    $previousPayoutSum = Payout::where('user_id', $userID)->sum($column);
                    $amountToPay = floatval($incomeSum) - floatval($previousPayoutSum);

                    $updateData[$column] = $amountToPay;
                }

                // Only process if there's a minimum threshold
                if ($payableTotal >= 1000) {
                    $updateData += [
                        'deduction'     => $deduction,
                        'service_charge'=> $serviceCharge,
                        'withdraw_amt'  => $withdrawAmount,
                        'total'         => $payableTotal,
                    ];

                    // Update the inserted payout row
                    Payout::where('id', $payoutId)->update($updateData);

                    // Optionally reset user balance or trigger other logic
                    // User::where('id', $userID)->update(['balance' => 0]);

                } else {
                    // Delete empty payout record if nothing is payable
                    Payout::where('id', $payoutId)->delete();
                }

                $counter++;
            }
        }
    }
}





  public function managePayout()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->orderBy('id','ASC')->cursor();



  
    if ($allResult) 
    {
       $counter=1;
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
     $adate_date =$value->adate;
     $balance=$value->balance;


  
    //  $income =Income::where('user_id',$userID)->sum('comm');
    //  $withdraw = Withdraw::where('user_id',$userID)->sum('amount');
     
    //   $balance = round($income-$withdraw,2);

       
      $totalDepositSponsor=Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
                             
     $total_profit_b = Income::where('user_id', $userID)->sum('comm');
     $total_profit=($total_profit_b)?$total_profit_b:0;
    


         $total_get=($totalDepositSponsor*400/100)+$value->extra_amt;
  
         $n_m_t = $total_get - $total_profit_b;

          
          if($n_m_t<=0)
          {
                echo 'ID: '. $userName." Balance : ".$n_m_t."<br>";   
                
             Investment::where('user_id',$userID)->update(['roiCandition' => 1]);       
             User::where('id',$userID)->update(['active_status' => 'Inactive']);       
                
          }
   
       
   
     
      
     
    

     $counter++;   
     }
    } 
    
    
    

}




  public function RoyalExel()

    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);

    $effectiveDate =date("Y-m-d H:i:s");
    $dateTime = date('Y-m-d H:i:s', strtotime("- 5 months", strtotime($effectiveDate)));

    $allResult=User::where('active_status','Active')->where("adate",">", '2024-05-01 00:50:37')->orderBy('id','ASC')->cursor();

    if ($allResult) 
    {
       $counter=1;
         echo "<table>";
         
         echo "<tr style='padding:10px'>";
         
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Sr No</th>";
      echo "<th style='padding: 10px;
    border: 2px solid black;'>Name</th>";

        echo "<th style='padding: 10px;
    border: 2px solid black;'>User ID</th>";
    
    
        echo "<th style='padding: 10px;
    border: 2px solid black;'>Investment</th>";
    
       echo "<th style='padding: 10px;
    border: 2px solid black;'>Activation Date</th>";
    
 

        
         
     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;


     $buypackage= Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
     $profitIncome = Income::where('user_id',$userID)->sum('comm');
       $total = $buypackage;
     
       $percentage = ($profitIncome / $total) * 100; // 20 
       
   
        echo "<tr style='padding:10px'>";
        
        echo "<td style='padding: 10px;
    border: 2px solid black;'>".$counter."</td>";
    
          echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->name."</td>";
    
       echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->username."</td>";
    
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$buypackage."</td>";
    
 
         echo "<td style='padding: 10px;
    border: 2px solid black;'>".$value->adate."</td>";
    
 
    
    
    
      
        echo "</tr>";   
           $counter++;   
   
     
    

  
     }
     
      echo "</table>";
    } 
    
    
    

}


  public function managePayout22()
    {  

date_default_timezone_set("Asia/Kolkata"); 
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','!=','Pending')->orderBy('id','ASC')->cursor();

     foreach ($allResult as $key => $value) 
     {
      
     $userID=$value->id;
     $userName=$value->username;
    
         $remarks_req=array('0','Staking Bonus','Direct Bonus','Royalty Bonus','Matching Bonus');

         for ($p=1; $p < 5; $p++) 
         { 
         $remarks=$remarks_req[$p];   
         
          $amount_rmarks=Income::where('user_id',$userID)->where('credit_type',0)->where('remarks',$remarks)->sum('comm');    
          
          
          if($amount_rmarks>0)
          {
            $data['remarks']=$remarks;
          $data['amount'] = $amount_rmarks;
          $data['ttime'] = date("Y-m-d");
          $data['user_id_fk'] = $userName;
          $data['user_id']=$userID;
          $income = Transaction::create($data); 
           Income::where('user_id',$userID)->where('is_swaped',0)->where('credit_type',0)->where('remarks',$remarks)->update(['is_swaped' => 1]);   
           
               
          }
         
             
         }
  
     }
     
  
    
    

}



 public function generate_roi_bonus()
    {  


//     echo "start".$start."<br>";
//     echo "end".$end."<br>";die();
// //   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->cursor();
    // dd($allResult);
    date_default_timezone_set('Asia/Kolkata');
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
        $userID=$value->id;
        $userName=$value->username;
        $user=User::where('username',$userName)->first();
          $activation_date = $user->adate;
              $activation_date = date('Y-m-d', strtotime($activation_date));
              $activation_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($activation_date)));
             $Investment_=Investment::where('user_id',$user->id)->where('roiCandition',0)->where('amount','>',1)->where('status','Active')->get();
            $sponsorDetail = User::where('id',$user->sponsor)->first();

             if (!empty($Investment_))
              {
               
              foreach ($Investment_ as $key => $value)
                {

                 $check_ex=Income::where('user_id',$user->id)->where('remarks','Staking Bonus')->where('invest_id',$value->id)->orderBy('id','DESC')->limit(1)->first();
                  $activation_date = $value->sdate;
                  $activation_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($activation_date)));
                 if (!empty($check_ex))
                  {
                    $activation_date = $check_ex->ttime;
                  }
                  $joining_amt = $value->amount;
                  $percent=5;
                  
                if($value->sdate>="2024-05-17")
                {
                    
                 if($joining_amt>=50 && $joining_amt<=199)
                  {
                    $percent=5;    
                  }
                  if($joining_amt>=200 && $joining_amt<=499)
                  {
                    $percent=6;    
                  }
                  if($joining_amt>=500 && $joining_amt<=1999)
                  {
                    $percent=7;    
                  }
                    if($joining_amt>=2000 && $joining_amt<=3999)
                  {
                    $percent=9;    
                  }
                  if($joining_amt>=4000 && $joining_amt<=4999)
                  {
                    $percent=10;    
                  }
                  
                 if($joining_amt>=5000)
                  {
                    $percent=10;   
                  }
                  
                }
                else
                {
                 
                     if($joining_amt>=50 && $joining_amt<=199)
                  {
                    $percent=5;    
                  }
                  if($joining_amt>=200 && $joining_amt<=499)
                  {
                    $percent=6;    
                  }
                  if($joining_amt>=500 && $joining_amt<=999)
                  {
                    $percent=7;    
                  }
                    if($joining_amt>=1000 && $joining_amt<=1999)
                  {
                    $percent=9;    
                  }
                  if($joining_amt>=2000 && $joining_amt<=4999)
                  {
                    $percent=10;    
                  }
                  
                 if($joining_amt>=5000)
                  {
                    $percent=11;   
                    
                    if($value->sdate>="2024-04-01")
                    {
                       $percent=10;   
                    }
                  }   
                }
                
                if($joining_amt==20)
                {
                   $percent=2;     
                }
              
                  
                  $percent2 = $percent/30;
               
                  
                  $roi = $joining_amt*$percent2/100;   
                  
                  

                    $begin = new DateTime($activation_date);
                            $today =  date('Y-m-d');

                         
                         $stop_date=  date('Y-m-d', strtotime("+ 1 day", strtotime($today)));
                            $end = new DateTime($stop_date);

                            $interval = DateInterval::createFromDateString('1 day');
                            $period = new DatePeriod($begin, $interval, $end);
    
                            foreach ($period as $dt) {
                                $day_number  =  $dt->format("N"); //1 for Monday, 7 for Sunday
                                 $totalDeposit=Investment::where('user_id',$user->id)->where('status','Active')->sum('amount');
                                 
                                 $total_profit_b = Income::where('user_id', $user->id)->where('invest_id',$value->id)->where('remarks','Staking Bonus')->sum('comm');
                                 $total_profit=($total_profit_b)?$total_profit_b:0;
                                
                            
                           
                                 $total_get=$totalDeposit*200/100;
                              
                                 $n_m_t = $total_get - $total_profit_b;
            
                                  if($roi >= $n_m_t)
                                  {
                                      $roi = $n_m_t;
                                  }  
                                 
                                if ($roi>0) 
                                {
                                    
                                $pendingStake= Income::where('user_id', $user->id)->where('credit_type',1)->where('remarks','Staking Bonus')->count();
                                if($pendingStake>=5)
                                {
                                    Income::where('user_id',$user->id)->where('credit_type',1)->where('remarks','Staking Bonus')->update(['credit_type' => 0]);  
                                }
                                
                                
                                $data['remarks'] = 'Staking Bonus';
                                $data['comm'] = $roi;
                                $data['level'] = 0;
                                $data['amt'] = $joining_amt;
                                $data['invest_id']=$value->id;
                                $data['credit_type']=1;
                                $data['ttime'] = $dt->format("Y-m-d");
                                $data['created_at'] = $dt->format("Y-m-d 01:22:12");
                                $data['updated_at'] = $dt->format("Y-m-d 01:22:12");
                                $data['user_id_fk'] = $user->username;
                                $data['user_id']=$user->id; 

                              $income = Income::firstOrCreate(['remarks' => 'Staking Bonus','ttime'=>$dt->format("Y-m-d"),'user_id'=>$user->id,'invest_id'=>$value->id],$data);
                              
                               $previous_date = date('Y-m-d', strtotime('-5 days'));
                               
                               
                              
                            //   if($sponsorDetail)
                            //   {
                            //     $total_profit_b = Income::where('user_id', $sponsorDetail->id)->where('rname', $user->username)->where('remarks','Matching Bonus')->count();
                                 
                            //      if($total_profit_b<30)
                            //      {
                            //       $roi2 = $joining_amt*$percent/100;   
                                   
                            //         $bonus =($roi2*10/100)/30;   
                                    
                            //      $totalDepositSponsor=Investment::where('user_id',$sponsorDetail->id)->where('status','Active')->sum('amount');
                             
                            //      $total_profit_b = Income::where('user_id', $sponsorDetail->id)->whereIn('remarks',['Staking Bonus','Matching Bonus'])->sum('comm');
                            //      $total_profit=($total_profit_b)?$total_profit_b:0;
                                
                            
                           
                            //          $total_get=$totalDepositSponsor*200/100;
                              
                            //          $n_m_t = $total_get - $total_profit_b;
                
                            //           if($bonus >= $n_m_t)
                            //           {
                            //               $bonus = $n_m_t;
                            //           }  
                                      
                                  
                            //         $data['remarks'] = 'Matching Bonus';
                            //         $data['comm'] = $bonus;
                            //         $data['level'] = 0;
                            //         $data['amt'] = $joining_amt;
                            //         $data['invest_id']=$value->id;
                            //         $data['ttime'] = $dt->format("Y-m-d");
                            //         $data['created_at'] = $dt->format("Y-m-d 01:22:12");
                            //         $data['updated_at'] = $dt->format("Y-m-d 01:22:12");
                            //         $data['user_id_fk'] = $sponsorDetail->username;
                            //         $data['user_id']=$sponsorDetail->id; 
                            //         $data['rname']=$user->username; 
    
                            //       $income = Income::firstOrCreate(['remarks' => 'Matching Bonus','ttime'=>$dt->format("Y-m-d"),'user_id'=>$sponsorDetail->id,'rname'=>$user->username],$data);
                                  
                            //      }
                              
                              
                                 
                            //   }
                              
                             
                              
                              
                                }
                                else
                                {
                                 Investment::where('id',$value->id)->update(['roiCandition' => 1]);   
                                }
                                
                                
                                
                                
                                



                                
                            }
                } 
                     
              // end Roi Income 


              }
       
      }
  }
}




 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->get();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
      
        // $tolteam=$this->my_level_team_count($user_id);
        
        $rightTeam_arr=$this->team_by_position($user_id,'Right');
       $leftTeam_arr=$this->team_by_position($user_id,'Left');
       
       
    //   $total_team=(!empty($tolteam)?count($tolteam):0);
       $rightBusiness=(!empty($rightTeam_arr))?Investment::whereIn('user_id',$rightTeam_arr)->where('status','Active')->sum('amount'):0;
       $leftBusiness=(!empty($leftTeam_arr))?Investment::whereIn('user_id',$leftTeam_arr)->where('status','Active')->sum('amount'):0;
       
       
    //   echo $rightBusiness."<br>";
    //   echo $leftBusiness."<br>";
       
     
     $require_power_bunsess=array('0','1000','3000','7000','20000','40000','80000','160000','320000','640000');
     $require_bonus=array('0','1','3','7','20','40','80','160','320','640');
 
     
     for($p=1;$p<10;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
  
        $bonus=$require_bonus[$p];
 
        
        $toatal_business=Reward::where('status','Approved')->where('user_id',$user_id)->sum("total_business");
        $total_business=($toatal_business)?$toatal_business:0;
       
        // $power_leg=$my_gen_busniess*50/100;
        // $vicker_leg=$my_gen_busniess*50/100;
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Reward::where('status','Approved')->where('user_id',$user_id)->where('level',$p)->count("id");
        // echo "<br>";
        //  echo $rightBusiness;
        //  echo "<br>";
        //  echo $leftBusiness;
        //  echo "<br>";
        //  echo $p;
        //  echo "<br>"; 
        //  echo "required p".$my_gen_busniess;
        //  echo "<br>"; 
        //  echo "required v".$my_gen_busniess;
        //  echo "<br>";
        if($check_level<=0)
        {
         $goalstatus=( $rightBusiness >= $my_gen_busniess && $leftBusiness >= $my_gen_busniess? 'Achieved':'Pending');
           if ($goalstatus=='Achieved')
               {
                   
                  echo "<br>";
          echo "ID : ".$username."<br>";
          echo "Level : ".$p;
          User::where('id', $user_id)
           ->update([
               'rank' => $p
            ]);
            
            $data['remarks'] = 'Reward Bonus';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
            $data['status']='Approved'; 
          $income = Reward::firstOrCreate(['remarks' => 'Reward Bonus','level'=>$p,'user_id'=>$user_id],$data);   
    
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 

}




public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        
    
 
        if($rewardDetail)
        {

             $checkLevel =Income::where('user_id',$userID)->where('remarks','Royalty Bonus')->where('level',$rewardDetail->level)->count();
         
             $amount = $rewardDetail->amount;
         
             $totalDepositSponsor=Investment::where('user_id',$userID)->where('status','Active')->sum('amount');
                                     
             $total_profit_b = Income::where('user_id', $userID)->sum('comm');
             $total_profit=($total_profit_b)?$total_profit_b:0;

             $total_get=($totalDepositSponsor*400/100)+@$value->extra_amt;
      
             $n_m_t = $total_get - $total_profit_b;
               if($amount >= $n_m_t)
              {
                  $amount = $n_m_t;
              }  
              
              
             
             if($checkLevel<90)
             {
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);   
             }
          
           
        }
        
        
   


        }
    }
}



  public function get_total_invest_by_team($user_ids)
    {
      
     $business= Investment::whereIn('user_id',$user_ids)->where('status','Active')->where('sdate','>=','2024-04-03')->sum('amount');
     return $business;
        
    }
    
    



 public function matching_bonus()

    {  
        

date_default_timezone_set("Asia/Kolkata");
//   User::where('id',20)->update(['name' =>'Rameshk']);
    $allResult=User::where('active_status','Active')->get();

    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
       $userID=$value->id;
        $userName=$value->username;
        $Package=$value->package;

          $capping=$Package;
        
       
       $rightTeam=$this->team_by_position($userID,'Right');
       $leftTeam=$this->team_by_position($userID,'Left');

          $left_direct=User::where('sponsor',$userID)->where('active_status','Active')->where('position','Left')->count('id'); 
         $right_direct=User::where('sponsor',$userID)->where('position','Right')->where('active_status','Active')->count('id');
         
         $totalDirect = $left_direct+$right_direct;

      if (!empty($left_direct) && !empty($right_direct) && $totalDirect>=4) 
        {
        
         $total_right=(!empty($rightTeam))?count($rightTeam):0;
         $total_left=(!empty($leftTeam))?count($leftTeam):0;
        
         if(($total_right>1) && ($total_left>0) || ($total_left>1) && ($total_right>0))
       {


          $left_business=$this->get_total_invest_by_team($leftTeam);
          $right_business=$this->get_total_invest_by_team($rightTeam);


         $tleftpackage=($left_business)? $left_business:0;
         $trightpackage=($right_business)? $right_business:0;

          if($tleftpackage<$trightpackage)
           {
           $amount = $tleftpackage;   
           $curry = $trightpackage-$tleftpackage;     
           }
          if($tleftpackage>$trightpackage)
          {
           $amount = $trightpackage;   
           $curry = $tleftpackage-$trightpackage;      
          }
          if($tleftpackage==$trightpackage)
          {
            $amount = ($trightpackage);

            $curry = $tleftpackage-$trightpackage;

          }
        
        
          $mtching=Income::where('user_id',$userID)->where('remarks','Matching Bonus')->where('ttime','>=','2024-04-03')->orderBy('id', 'DESC')->limit(1)->first();
          
           $amount=$amount;
           $tamount = $amount;
          $amount = $amount - (!empty($mtching)?$mtching->amt:0);
            
             $idate = date("Y-m-d");
              $total_today= Income::where('user_id', $user->id)->sum('comm');
                                 
                      //print_r($user_id_fk);die;
              $joiningAMt = Investment::where('user_id',$userID)->where('status','Active')->sum("amount");

             $percent=0;
             if($joiningAMt>=50 && $joiningAMt<=199)
              {
                $percent=1;    
              }
              if($joiningAMt>=200 && $joiningAMt<=499)
              {
                $percent=1;    
              }
              if($joiningAMt>=500 && $joiningAMt<=999)
              {
                $percent=2;    
              }
                if($joiningAMt>=1000 && $joiningAMt<=1999)
              {
                $percent=2;    
              }
              if($joiningAMt>=2000 && $joiningAMt<=4999)
              {
                $percent=3;    
              }
                  
              $amount = ($amount/100)*$percent;  
          
          

             $max_income=($joiningAMt*400/100)+$value->extra_amt;
               $n_m_t = $max_income - $total_today;
              if($amount >= $n_m_t)
              {
                  $amount = $n_m_t;
              }
                          
                          
        //   print_r($amount);die();
        
            echo "ID:".$userName." amounts:".$amount."<br>";
             $data['remarks'] = 'Matching Bonus';
            $data['comm'] = $amount;
            $data['amt'] = $tamount;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['level']=1;
            $data['tleft']=$tleftpackage;
            $data['tright']=$trightpackage;
            $data['user_id']=$userID; 
            $data['curry']=$curry;
          $income = Income::firstOrCreate(['remarks' => 'Matching Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);


          


      }
       

     }

      }
   }
}




        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
