<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\system_employee;
use App\post;
use App\clinic;
use App\doctor;
use App\secretary;
use App\user;
use App\employee_permission;
use Illuminate\Support\Facades\Auth;


class system_employeeController extends Controller
{
    
    
    /*
    
     public function __construct()
    {
       $this->middleware('auth');
    }
    
    */
        
    public function get_dashboard(){
        
        
     $user_count=user::all()->count();   
     $secretary_count=secretary::all()->count();    
     $doctor_count=doctor::all()->count();
     $employee_count=system_employee::all()->count();     
     $clinic_count=clinic::all()->count();
     $post_count=post::all()->count();     
   
     return view('private pages.employee pages.dashboard',compact('user_count','secretary_count'
                 ,'doctor_count','employee_count','clinic_count','post_count'));    
        
    }
    
    
    
    public function manage_employee(){
        
       
        $system_employee=system_employee::paginate(6);
        
       return view('private pages.employee pages.manage_employees',compact('system_employee'));
        
    }
    
    
    
    
    public function create(){
        
        
        return view('private pages.employee pages.add_employee');
        
    }
    
    
    public function store(Request $request){
        
         
        $request->validate( [
            'name' => ['required', 'string'],
            'number_id' => ['required', 'integer'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:system_employees'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
            $employee=system_employee::create([
            'name' => $request['name'],
            'number_id' => $request['number_id'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
            
        $employee_permission=new employee_permission();
        $employee_permission->system_employee_id=$employee->id;
        $employee_permission->save();    
        
        
        return back();        
           
    }
    
    
    
       public function edit_my_info(){
           
        
         $employee=auth()->guard('system_employee')->user();
        
        return view('private pages.employee pages.Edit-Employee-info',compact('employee'));
        
        
    }
    
    
    
    
      public function update_my_info(Request $request){
        
        
        $request->validate( [
            'name' => ['required', 'string'],
            'number_id' => ['required', 'integer'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
            ]);
        
        
        $id=$request->employee_id;
        $system_employee=system_employee::find($id);
        $system_employee->name=$request->name;    
        $system_employee->number_id=$request->number_id;
        $system_employee->age=$request->age;
        $system_employee->phone=$request->phone;
        $system_employee->save();
        
        return back();
        
        
    }
    
    
    
    
    
    
    
    public function update(Request $request){
        
        
        
        
        $request->validate( [
            'name' => ['required', 'string'],
            'number_id' => ['required', 'integer'],     
            'age' => ['required', 'string'],
            'phone' => ['required', 'string'],
            ]);
        
        
        $id=$request->employee_id;
        $system_employee=system_employee::find($id);
        $system_employee->name=$request->name;    
        $system_employee->number_id=$request->number_id;
        $system_employee->age=$request->age;
        $system_employee->phone=$request->phone;
        $system_employee->save();
        
        return back();
        
        
    }
    
    
    
    
    
    public function delete($id){
        
        $system_employee=system_employee::find($id);
        $system_employee->employee_permissions()->delete();
        $system_employee->delete();
        
        return back();
        
    }
    
    
    
    
    
    public function view_details($id){
        
        
        $system_employee=system_employee::find($id);
        
        return view('private pages.employee pages.view_employee_details',compact('system_employee'));
    }
    
    
    
    
    
}
