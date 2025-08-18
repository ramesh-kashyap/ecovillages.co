<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyFund extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id_fk', 'user_id','amount','sdate','status','utrno','type','slip','plan','percentage','active_from'
    ];


      public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 

    
}
