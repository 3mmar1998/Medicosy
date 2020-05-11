<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
       
    
    public function clinic(){
       
       
        return $this->belongsTo('App\clinic');
       
   }
    
    
    
    
}
