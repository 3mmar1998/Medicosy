<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workday extends Model
{
    
    
     protected $attributes = [
        'start_time' => "9:00",
        'end_time' => "4:00",
        'appointment_duration'=>15, 
    ];
    
    
    
    
   public function clinic(){
       
       
        return $this->belongsTo('App\clinic');
       
   }
    
    
}
