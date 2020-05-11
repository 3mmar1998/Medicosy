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
			
              
              
                  
                
						<div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">Clinic Information</h3>
							<ul class="unordered-list profile-information">
								<li>Address : {{ $clinic->address}}</li>
								<li>telephone : {{ $clinic->telephone}}</li>
								<li>status : {{ $clinic->status}}</li>
							</ul>
						</div>
  
                  
                        
						<div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">Work Days</h3>
							<ul class="unordered-list profile-information">
                                @foreach ($clinic->workdays()->get() as $workdays)
								<li>day :{{$workdays->day}} , start time :{{$workdays->start_time}} , end time : {{$workdays->end_time}} </li>
                                @endforeach
							</ul>
						</div>
              
                      
                        <div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">Doctor</h3>
							<ul class="unordered-list profile-information">
                                @foreach ($clinic->doctors()->get() as $doctor)
								<li>doctor: {{$doctor->name}} , {{$doctor->phone}} , {{$doctor->specialist}}
                                <a href="{{url('/system_employee/edit_doctor/'.$doctor->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('/system_employee/delete_doctor/'.$doctor->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </li>    
                                @endforeach
							</ul>
						</div>
              
              
              
                        <div class="col-sm-6 col-lg-6 clinics mt-10">
                            <h3 class="mb-20">secretary</h3>
							<ul class="unordered-list profile-information">
                                @foreach ($clinic->secretaries()->get() as $secretary)
								<li>secretary: {{$secretary->name}} 
                                <a href="{{url('/system_employee/edit_secretary/'.$secretary->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('/system_employee/delete_secretary/'.$secretary->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </li>
                                @endforeach
							</ul>
						</div>

                 
              </div>
		

			
		  
      </div>
	  
	  </div>
      <!-- End of Main Content -->

	  
	  
	  @endsection