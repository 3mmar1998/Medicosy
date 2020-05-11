<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logoutAll');
        $this->middleware('guest:secretary')->except('logoutAll');
        $this->middleware('guest:system_employee')->except('logoutAll');
        $this->middleware('guest:doctor')->except('logoutAll');
    }
    
    
    
    
    // login secreatry functions ---------------------------------
    public function show_secreatry_login_form(){
        
        return view('auth.secretary_login');
    }
    
    public function login_secretary(Request $request){
        
       
        if(Auth::guard('secretary')->attempt(['email'=>$request->email,'password'=>$request->password],
           $request->get('remember')))

            
        {
            return redirect()->intended('/secretary');

        }

        return back()->withInput($request->only('email','remember'));
      
      
    }
    //---------------------------------------------------------------
    
    
  
    
    
    //login doctor functions ---------------------------------------
    public function show_doctor_login_form(){
        
        return view('auth.doctor_login');
    }
    
    public function login_doctor(Request $request){
        
      
        if(Auth::guard('doctor')->attempt(['email'=>$request->email,'password'=>$request->password],
           $request->get('remember')))

        {
            return redirect()->intended('/doctor');

        }

        return back()->withInput($request->only('email','remember'));
    }
    
    //--------------------------------------------------------------
    
    
    
  
    
    //login system employee functions--------------------------------
    public function show_system_employee_login_form(){
       
        return view('auth.employee_login');
    }
    
    public function login_system_employee(Request $request){
       
        
        
        
        if(Auth::guard('system_employee')->attempt(['email'=>$request->email,'password'=>$request->password],
           $request->get('remember')))

        {
            
           
            return redirect()->intended('system_employee');

        }

        return back()->withInput($request->only('email','remember'));
    }
    //--------------------------------------------------------------
    
    
    
    
    //logout for all type of guards------
    public function logoutAll(Request $request){
      
        $this->guard()->logout();
        $request->session()->invalidate();
            
        return redirect()->intended('/');  
    }
    //------------------------------------    
    
    
    
}
