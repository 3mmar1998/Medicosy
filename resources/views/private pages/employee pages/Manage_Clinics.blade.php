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
			
			
			
			
		  <div class="row justify-content-center">
			
		  <a href="{{url('/system_employee/add_clinic')}}" class="genric-btn primary primary-border">Add Clinic +</a>
		  
		  </div>
		
			
		  
            
    

		  <div class="row justify-content-center mt-10">
		  
		  
									<form target="_blank" action="" method="get" class="form-inline">
									<input class="form-control" name="search_clinic" placeholder="Enter name of Doctor">
									<button type="submit"  class="click-btn btn btn-default text-uppercase"> 
                                        ok
									</button>
								
                                <div class="info"></div>
                            </form>	
			
		  
		  
		
            
    </div>
	
            
            
            <div class="row justify-content-center mt-10">
                {{$clinic->links()}}
            </div>

			
		  
          <!-- Content Row -->
          <div class="row justify-content-center mt-10">

        	@foreach ($clinic as $clinic)
			<div class="col-sm-6 col-lg-3 clinics mt-10">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('img-custom/doctor/doctor_1.png')}}" alt="doctor">
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                
                                
                               
                                 @foreach ($clinic->doctors()->get() as $doctors)
                                <h3>DR: {{$doctors->name}}</h3>
                                @endforeach
                               
                                
                                
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <h4> Options</h4> 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('/system_employee/create_secretary/'.$clinic->id)}}">Add Secratery</a>
                                        <a class="dropdown-item" href="{{url('/system_employee/create_doctor/'.$clinic->id)}}">Add doctor</a>
										<a class="dropdown-item" href="{{url('/system_employee/view_clinic_details/'.$clinic->id)}}">view Details</a>
                                        <a class="dropdown-item" href="{{url('/system_employee/delete_clininc/'.$clinic->id)}}">Delete</a>
                                    </div>
                                </div>
                                
                                

                            </div>
                        </div>
                    </div>
                </div>
			@endforeach

				         </div>
      </div>
	  
	  </div>
      <!-- End of Main Content -->

	  
	  
	  @endsection