<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    //
     protected $fillable = [ 'id','name', 'price', 'users_id',];
      
        public function teste() {
    	return $this->belongsTo('App\Test');
    }

    public function testes() {
      return $this->hasMany('App\Test');
    }


}
