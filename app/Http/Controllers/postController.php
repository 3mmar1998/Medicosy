<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
class postController extends Controller
{
    
    
    public function manage_post(){
        
        return view('private pages.employee pages.manage_posts');
        
    }
    
    
    
    public function create(){
        
        return view('private pages.user pages.Add_post');
        
    }
    
    
    public function store(Request $request){
      
        
        $request->validate([
        'text' => 'required',
         ]);
      
        
        $id = Auth::id();
        
        
        $post=new Post();
        $post->user_id=$id;
        $post->text = $request->text;
        $post->save();
        
        
    }
    
    
    
}
