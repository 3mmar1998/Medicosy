<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;


class userController extends Controller
{
    
    
    public function manage_user(){
        
        $user=user::paginate(6);
        
        return view('private pages.employee pages.manage_users',compact('user'));
        
    }
    
    
    
    
    public function get_my_profile(){
        
        return view('private pages.user pages.my_profile');
        
    }
    
    
    public function edit(){
        
        return view('private pages.user pages.Edit_Information_user');
        
    }
    
    
    
    public function delete($id){
        
        
        $user=user::find($id);
        $user->user_permission()->delete();
        $user->delete();
        
        return back();
    }
    
    
    
    public function view_details($id){
        
        
        $user=user::find($id);
        
        return view('private pages.employee pages.view_user_details',compact('user'));
    }
    
    
    
    
    
    
    
    
    
}
