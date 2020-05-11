<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    
    
    protected $attributes = [
        'address' => "",
        'telephone' => 0000000,
        'status'=>false, 
    ];
    
    
    
    
   public function secretaries(){
       
       
        return $this->hasMany('App\secretary');
       
   }
    
    
    
    
   public function user_blocks(){
       
       
        return $this->hasMany('App\user_block');
       
   }
    
    
       public function doctors(){
       
       
        return $this->hasOne('App\doctor');
       
   }
    
    
       public function appointments(){
       
       
        return $this->hasMany('App\appointment');
       
   }
    
    
       public function place(){
       
       
        return $this->hasOne('App\place');
       
   }
    
    

         public function workdays(){
       
       
        return $this->hasMany('App\workday');
       
   }
    

    
    
    
}
