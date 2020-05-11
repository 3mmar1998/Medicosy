<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    
   public function post(){
       
       
        return $this->belongsTo('App\psot');
       
   }
    
    
    
    
}
