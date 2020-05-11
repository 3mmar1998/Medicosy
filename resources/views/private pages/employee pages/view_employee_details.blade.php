@extends('layouts.private_pages_employee')

@section('content')

	
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          
			<h2>Omar Amer</h2>	
          <!-- Topbar Navbar -->

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
			
			
			
			
		  <div class="row">
			
              
              
                  
                
						<div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">employee Information</h3>
							<ul class="unordered-list profile-information">
								<li>name : {{ $system_employee->name}}</li>
								<li>email : {{ $system_employee->email}}</li>
								<li>Number ID : {{ $system_employee->number_id}}</li>
                                <li>Age : {{ $system_employee->age}}</li>
                                <li>phone : {{ $system_employee->phone}}</li>
							</ul>
						</div>
  
                  
                        
						<div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">user permissions</h3>
							<ul class="unordered-list profile-information">
                                @foreach($system_employee->employee_permissions()->get() as $permission)
								<li>Conrol users :{{$permission->control_users}}  </li>
                                <li>Conrol clinics :{{$permission->control_clinics}}  </li>
                                <li>Conrol employees :{{$permission->control_employees}} </li>
                                @endforeach
							</ul>
						</div>
              
                 
              
              
                   <div class="col-sm-6 col-lg-6 clinics mt-10">
                    
                                       
                    <form method="POST" action="{{url('/system_employee/update_employee')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $system_employee->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        
                                <input id="employee_id" type="hidden" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ $system_employee->id}}"  required autocomplete="employee_id" autofocus>

                        
                        <div class="form-group row">
                            <label for="number_id" class="col-md-4 col-form-label text-md-right">{{ __('Number ID') }}</label>

                            <div class="col-md-6">
                                <input id="number_id" type="text" class="form-control @error('number_id') is-invalid @enderror" name="number_id" value="{{ $system_employee->number_id}}" required autocomplete="number_id" autofocus>

                                @error('number_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $system_employee->age}}" required autocomplete="age" autofocus>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        
                       <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$system_employee->phone}}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-sm">
                                    {{ __('edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
              
                    
                    
                        <div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">user permissions</h3>
                             
                                <form action="/system_employee/update_employee_permission" method="post" >  
                                    @csrf
                                @foreach($system_employee->employee_permissions()->get() as $permission)    
                                 <div class="radio">
                                <h4>control users</h4>
                                @if($permission->control_users==true)     
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_users" checked>enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_users">disable</label>
                                @else
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_users">enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_users" checked>disable</label>     
                                </div>
                                @endif 
                                    
                                    
                                    
                                <div class="radio">
                                <h4>control users</h4>
                                @if($permission->control_clinics==true)     
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_clinics" checked>enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_clinics">disable</label>
                                @else
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_clinics">enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_clinics" checked>disable</label>     
                                </div>
                                @endif 
                 
                                    
                                    
                                <div class="radio">
                                <h4>control users</h4>
                                @if($permission->control_employees==true)     
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_employees" checked>enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_employees">disable</label>
                                @else
                                <label class="radio-inline"><input type="radio" value="{{$t=1}}" name="control_employees">enable</label>
                                <label class="radio-inline"><input type="radio" value="{{$f=0}}" name="control_employees" checked>disable</label>     
                                </div>
                                @endif 
                                
                                   
                                <input type="hidden" name="emp_id" value="{{$permission->id}}">
                                <div>     
                                <button class="btn btn-warning btn-sm" type="submit">Edit</button> 
                                </div>    
                                @endforeach     
                                </form>         
                                    
                        </div>
              
            
              
                    
              
              </div>
		
		

			
		  
      </div>
	  
	  </div>
        
        
      <!-- End of Main Content -->

	  
	  
	  @endsection


