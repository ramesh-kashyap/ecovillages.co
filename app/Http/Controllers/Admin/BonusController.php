<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\User_trade;
use App\Models\BuyFund;

class BonusController extends Controller
{
    public function reward_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
             $notes = Income::where('remarks','Reward Income')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('comm', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')

              ->orWhere('ttime', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['direct_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.real-reward';
                return $this->admin_dashboard();



    }
    public function roi_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
             $notes = Income::where('remarks','Referral Income')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('comm', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')

              ->orWhere('ttime', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['direct_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.roi-bonus';
                return $this->admin_dashboard();



    }

    public function level_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Farming Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.level-bonus';
                return $this->admin_dashboard();
    }


  public function activities_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Salary Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.activities-bonus';
                return $this->admin_dashboard();
    }



    public function contractprofit(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Contract Profit Sharing')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.booster-bonus';
                return $this->admin_dashboard();
    }



    public function club_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Same Rank Profit Sharing ')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.samerank';
                return $this->admin_dashboard();
    }



    public function recurring_bonus(Request $request)
    {


           $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('remarks','Reccuring Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['level_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.bonus.reward-bonus';
                return $this->admin_dashboard();
    }
    
    public function approve_buyFund(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = BuyFund::where('status','Approved')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%');
             
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['buyfund_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.buyFund.fund-report';
        return $this->admin_dashboard();
    }
    
      public function buyFund_request(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = BuyFund::where('status','Pending')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%');
             
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['buyfund_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.buyFund.fund-request';
        return $this->admin_dashboard();
    }
    
    public function update_fund_status(Request $request)
{
    $id = $request->input('id');
    $status = $request->input('status');

    $fund = BuyFund::find($id); // Use correct model name

    if ($fund) {
        $fund->status = $status;
        $fund->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    return redirect()->back()->with('error', 'Record not found.');
}


}
