<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    
    
    public function clinic(){
        
        return $this->belongsTo('App\clinic');
        
    }
    
    
    
    public function user(){
        
        return $this->belongsTo('App\user');
        
    }
    
    
    
    
    
    
}
