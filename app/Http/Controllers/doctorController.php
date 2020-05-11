<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctor;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Auth;

class doctorController extends Controller
{
    
    
    public function create($id){
        
        return view('private pages.employee pages.add_doctor',compact('id'));
        
    }
    
    
    
    public function store(Request $request){
        
        
        
            $request->validate( [
            'name' => ['required', 'string'],
            'specialist'=> ['required', 'string'],   
            'number_id' => ['required', 'integer'],
            'clinic_id'=>['required'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
        
        
         doctor::create([
            'name' => $request['name'],
            'specialist'=> $request['specialist'],
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
        
        $doctor=doctor::find($id);
        return view('private pages.employee pages.edit_doctor',compact('doctor'));
        
    }
    
    
    
    public function update(Request $request){
        
        
             $request->validate( [
            'doctor_id'  => ['required'],    
            'name' => ['required', 'string'],
            'specialist'=> ['required', 'string'],   
            'number_id' => ['required', 'integer'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        
        $doctor=doctor::find($request->doctor_id);
        $doctor->name=$request->name;
        $doctor->specialist=$request->specialist;
        $doctor->number_id=$request->number_id;
        $doctor->age=$request->age;
        $doctor->phone=$request->phone;
        $doctor->save();
        
        return back();
    }
    
    
    
    public function delete($id){
        
        $doctor=doctor::find($id);
        $doctor->delete();
        
        return back();
    }
    
    
}
