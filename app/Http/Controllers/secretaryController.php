<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\secretary;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Auth;

class secretaryController extends Controller
{
    
    
    
    
    public function create($id){
        
        return view('private pages.employee pages.add_secretary',compact('id'));
        
    }
    
    
    
    
    
    
    public function store(Request $request){
        
      
           
             $request->validate( [
            'name' => ['required', 'string'],
            'number_id' => ['required', 'integer'],
            'clinic_id'=>['required'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:secretaries'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
        
        
         secretary::create([
            'name' => $request['name'],
            'clinic_id' => $request['clinic_id'],
            'number_id' => $request['number_id'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
            
            
        return back();        
            
      }
           
    
    
    
        public function edit($id){
        
        $secretary=secretary::find($id);
        return view('private pages.employee pages.edit_secretary',compact('secretary'));
      
    }
    
    
    
    
    public function update(Request $request){
        
        
             $request->validate( [
            'secretary_id'  => ['required'],    
            'name' => ['required', 'string'],   
            'number_id' => ['required', 'integer'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        
        $secretary=secretary::find($request->secretary_id);
        $secretary->name=$request->name;
        $secretary->number_id=$request->number_id;
        $secretary->age=$request->age;
        $secretary->phone=$request->phone;
        $secretary->save();
        
        return back();
    }
    
    
    
    
    
    
    public function delete($id){
        
        
        $secretary=secretary::find($id);
        $secretary->delete();
        
        return back();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }
    

