<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
   public function user(){
       
       
        return $this->belongsTo('App\user');
       
   }
    
    
    
   public function rplies(){
       
       
        return $this->hasMany('App\reply');
       
   }
    
    
}
