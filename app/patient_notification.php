<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_notification extends Model
{
    
    
    public function user(){
        
        return $this->belongsTo('App\user');
        
    }
    
}
