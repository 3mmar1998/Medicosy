<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','number_id','age','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
    
    public function user_permission(){
        
        return $this->hasOne('App\user_permission');
        
    }
    
    
    
    
    public function appointments(){
        
        return $this->hasMany('App\appointment');
        
    }
    
    
    
    public function posts(){
        
        return $this->hasMany('App\post');
        
    }
    
    
    
    
    public function user_notifications(){
        
        return $this->hasOne('App\user_notification');
        
    }
    
    
    public function patient_blocks(){
        
        return $this->hasMany('App\patient_block');
        
    }
    
    
    
    
    
    
}
