<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected $fillable = ['id','date','procedures_id','users_id',];


    public function users(){
    		return $this->belongsTo('App\User');

    }

       public function procedures(){
    		return $this->belongsTo('App\Procedure');

    }

   
}
