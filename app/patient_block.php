<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_block extends Model
{
    
    
    public function user(){
        
        return $this->belongsTo('App\user');
        
    }
    
    
    
    public function clinic(){
        
        return $this->belongsTo('App\clinic');
        
    }
    
    
    
    
    
}
