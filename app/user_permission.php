<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_permission extends Model
{
    
    
     protected $attributes = [
        'can_take_appointments' => true,
        'can_delete_post' => true,
        'can_post'=> true, 
    ];
    
    
    
    
        public function user(){
        
        return $this->belongsTo('App\user');
        
    }
    
}
