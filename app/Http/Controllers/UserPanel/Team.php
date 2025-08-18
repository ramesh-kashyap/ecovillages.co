<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reentry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Team extends Controller
{
 public function index(Request $request)
{
    $user = Auth::user();
    $limit = $request->limit ?? paginationLimit();
    $status = $request->status ?? null;
    $search = $request->search ?? null;
    $startDate = $request->start_date;
    $endDate = $request->end_date;

    // Base query: direct team of logged-in user
    $query = User::where('sponsor', $user->id)->orderBy('id', 'DESC');

    // Clone query to calculate stats before pagination
    $teamStats = (clone $query)->get();

    $this->data['total_team'] = $teamStats->count();
    $this->data['active_total_team'] = $teamStats->where('active_status', 'Active')->count();
    $this->data['totalPackage'] = $teamStats->sum('package');

    // Text search
    if ($search !== null && $request->reset != "Reset") {
        $query = $query->where(function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });
    }

    // Date-to-date filter
    if ($startDate && $endDate) {
        $query = $query->whereBetween('jdate', [$startDate, $endDate]);
    }

    // Paginate
    $notes = $query->paginate($limit)->appends([
        'limit' => $limit,
        'search' => $search,
        'start_date' => $startDate,
        'end_date' => $endDate,
    ]);

    $this->data['direct_team'] = $notes;
    $this->data['search'] = $search;
    $this->data['start_date'] = $startDate;
    $this->data['end_date'] = $endDate;
    $this->data['page'] = 'user.team.direct-team';

    return $this->dashboard_layout();
}

 


public function LevelTeam(Request $request)
{
    $user = Auth::user();

    // Level team IDs
    $ids = $this->my_level_team_count($user->id);

    // Pagination limit
    $limit = $request->limit ?: paginationLimit();

    // Status filter (agar future me use karna ho)
    $status = $request->status ?: null;

    // Search term
    $search = $request->search ?: null;

    // Base query
    $notes = User::where(function ($query) use ($ids) {
        if (!empty($ids)) {
            foreach ($ids as $value) {
                $query->orWhere('id', $value);
            }
        } else {
            $query->where('id', null);
        }
    })->orderBy('id', 'DESC');

    // Apply search if exists and not resetting
    if ($search && $request->reset != "Reset") {
        $notes = $notes->where(function ($q) use ($search) {
            $q->orWhere('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });
    }

    // Paginate results and append query params
    $notes = $notes->paginate($limit)->appends([
        'limit' => $limit,
        'search' => $search
    ]);

    // Data for view
    $this->data['direct_team'] = $notes;
    $this->data['search'] = $search;
    $this->data['total_team'] = $notes->count();
    $this->data['active_total_team'] = $notes->where('active_status', 'Active')->count();
    $this->data['totalPackage'] = $notes->sum('package');
    $this->data['page'] = 'user.team.level-team';

    return $this->dashboard_layout();
}

  public function leftteam(Request $request)
  {
    $user = Auth::user();
    // print_r($user->username);die();
    $ids = $this->team_by_position($user->id, 'Left');

    $limit = $request->limit ? $request->limit : 10;
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    // $notes = User::where('sponsor',$user->username);
    $notes = User::whereIn('id', $ids);
    $this->data['total_team'] = $notes->count();
    $this->data['active_total_team'] = $notes->where('active_status', 'Active')->count();
    $this->data['totalPackage'] = $notes->sum('package');

    //   $totalWithdrw = \DB::table('withdraws')->whereIn('user_id',$ids)->where('status','Approved')->sum('amount');
    //           $totaltransfer = \DB::table('fundtransfers')->whereIn('transfer_id',$ids)->sum('amount');


    //      echo $totalWithdrw." ".$totaltransfer."<br>";
    //      echo "total:".$totalWithdrw+$totaltransfer;


    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
      });
    }
    $notes = $notes->paginate($limit)
      ->appends([
        'limit' => $limit
      ]);

    $this->data['direct_team'] = $notes;
    $this->data['search'] = $search;

    $this->data['page'] = 'user.team.left-team';
    return $this->dashboard_layout();
  }



  public  function team_by_position($userid, $position)
  {
    $ret = array();
    $get_position_user = User::where('Parentid', $userid)->where('position', $position)->first();
    if ($get_position_user) {

      $ret = $this->my_binary($get_position_user->id);
      $ret[] = $get_position_user->id;
    }

    return $ret;
  }



  public  function my_binary($userid)
  {
    $arrin = array($userid);
    $ret = array();
    // print_r($arrin);die();
    while (!empty($arrin)) {
      $alldown = User::select('id')->whereIn('Parentid', $arrin)->get()->toArray();
      if (!empty($alldown)) {
        $arrin = array_column($alldown, 'id');
        $ret[] = $arrin;
      } else {
        $arrin = array();
      }
    }
    // continue;    
    $final = array();
    if (!empty($ret)) {
      array_walk_recursive($ret, function ($item, $key) use (&$final) {
        $final[] = $item;
      });
    }

    return $final;
  }



  public function find_users($snode, $pos)
  {
    // $this->load->model('Dashboard_model');
    $user_just_downline = User::where('Parentid', $snode)->where('position', $pos)->first();
    return $user_just_downline;
  }



     public function genealogy(Request $request)
    {
       $user=Auth::user();
        $tuser=$request->user_id;
        if($tuser==NULL){
       $suser = @$request->suser;
        if($suser==""){
        $username = $user->username;
        }
        else{
            $session_id = $user->id;
            $username = $suser;
             $user_id=User::where('username',$username)->first();
         if($user_id->id>$session_id)
         {
          $username= $suser;  
         }
         else
         {
           $username = $user->username;   
         }
        }
       }
       else{
           $username = $tuser;
          }

           $check=User::where('username',$username)->count();;
            if($check>0)
            {
               $username = $username;  
            }
            else
            {
             $username = $user->username;    
            }
     
      $complete_tree = array();
      $pool='users';
      $userDetail=User::where('username',$username)->first();
      if($userDetail)
      {
        $userID= $userDetail->id;  
      }
      else
      {
          $userID= Auth::user()->id;     
      }
    
     $alldown= User::where('sponsor',$userID)->get();
     $directCount= $alldown->count();

     

    $this->data['direct_team'] =$alldown;
    $this->data['mydata'] =$userDetail;
    $this->data['directCount'] =$directCount;
    $this->data['page'] = 'user.team.tree-view';
    return $this->dashboard_layout();


    }



  public function rightteam(Request $request)
  {
    $user = Auth::user();
    // print_r($user->username);die();
    $ids = $this->team_by_position($user->id, 'Right');

    $limit = $request->limit ? $request->limit : 10;
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    // $notes = User::where('sponsor',$user->username);
    $notes = User::whereIn('id', $ids);
    $this->data['total_team'] = $notes->count();
    $this->data['active_total_team'] = $notes->where('active_status', 'Active')->count();
    $this->data['totalPackage'] = $notes->sum('package');

    //   $totalWithdrw = \DB::table('withdraws')->whereIn('user_id',$ids)->where('status','Approved')->sum('amount');
    //           $totaltransfer = \DB::table('fundtransfers')->whereIn('transfer_id',$ids)->sum('amount');


    //      echo $totalWithdrw." ".$totaltransfer."<br>";
    //      echo "total:".$totalWithdrw+$totaltransfer;




    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->orWhere('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
      });
    }
    $notes = $notes->paginate($limit)
      ->appends([
        'limit' => $limit
      ]);

    $this->data['direct_team'] = $notes;
    $this->data['search'] = $search;
    $this->data['page'] = 'user.team.right-team';
    return $this->dashboard_layout();
  }





  public function my_level_team_count($userid, $level = 10)
  {
    $arrin = array($userid);
    $ret = array();

    $i = 1;
    while (!empty($arrin)) {
      $alldown = User::select('id')->whereIn('sponsor', $arrin)->get()->toArray();
      if (!empty($alldown)) {
        $arrin = array_column($alldown, 'id');
        $ret[$i] = $arrin;
        $i++;
      } else {
        $arrin = array();
      }
    }

    $final = array();
    if (!empty($ret)) {
      array_walk_recursive($ret, function ($item, $key) use (&$final) {
        $final[] = $item;
      });
    }


    return $final;
  }


  public function refer()
  {
    return view('user.team.refer');
  }
}
