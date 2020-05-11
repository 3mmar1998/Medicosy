<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee_permission;

class employee_permissionController extends Controller
{
    
    
    public function update(Request $request){
        
      
            $request->validate( [
            'control_users'  => ['required','boolean'],    
            'control_clinics' => ['required','boolean'],
            'control_employees'=> ['required','boolean'],   

        ]);

    
        $id=$request->emp_id;
        
        $p=employee_permission::find($id);
        $p->control_users=$request->control_users;
        $p->control_clinics=$request->control_clinics;
        $p->control_employees=$request->control_employees;
        $p->save();
        
        return back();
        
    }
    
    
}
