<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinic;
use App\workday;
    
class clinicController extends Controller
{
    
    
    
    public function manage_clinic(){
        
        
        $clinic=clinic::paginate(6);
        
        
        
        return view('private pages.employee pages.manage_clinics',compact('clinic'));
        
        
    }
    
    
    
    
    
    
    public function store(){
        
        
        
                
        $clinic=new clinic;
        $clinic->save();
       
        $clinic_id=$clinic->id;
        
        $workday=new workday;
        $workday->clinic_id=$clinic_id;  
        
        for($i=0;$i<=6;$i++){
    
            $workday=new workday;
            $workday->clinic_id=$clinic_id;  
    
            $workday->day=$i;
            $workday->save();
            
        }
       
        return back();
        
    }
    
    
    
    public function delete($id){
        
        
        $clinic =clinic::find($id);

        $clinic->secretaries()->delete();
        $clinic->delete();
        return back();
    }
    
    
    
    
    public function view_details($id){
        
        
        $clinic=clinic::find($id);
        
       return view('private pages.employee pages.view_clinic_details',compact('clinic'));
        
    }
    
    
    
    
    public function search($id){
        
        
        $clinic=clinic::find($id);
        
        return view('private pages.employee pages.view_clinic_details',compact('clinic'));
        
        
        
    }
    
    
    
    
}
