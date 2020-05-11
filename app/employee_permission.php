<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_permission extends Model
{
    
    
    
     protected $attributes = [
        'control_users' => false,
        'control_clinics' =>false ,
        'control_employees'=>false,
         
    ];
    
    
    
    
    public function system_employee(){
        
        return $this->belongsTo('App\system_employee');
        
    }
}
