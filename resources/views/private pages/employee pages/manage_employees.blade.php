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
                    <div class="regervation_part_iner">
                    
			<a href="{{url('/system_employee/create_employee')}}" class="genric-btn primary">add employee</a>
                </div>
            </div>

			
			
			
			 <div class="row justify-content-center mt-10">
		  
		  
									<form target="_blank" action="" method="" class="form-inline">
									<input class="form-control" name="search_clinics" placeholder="Enter name of Employee">
									<button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
									</button>
									<div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>	
			
		  
		  
		  </div>
		
			
			
			
			
			
		  
          <!-- Content Row -->
          <div class="row justify-content-center mt-10">

        	
			
			
			<table class=" mt-10 table-custom">
						  <thead>
                              
							<tr>
				 			
							  <th scope="col">Name</th>
							  <th scope="col">email</th>
							  <th scope="col">Number ID</th>
							  <th scope="col">Age</th>
							  <th scope="col">Phone</th>
                              <th scope="col">view</th>
                              <th scope="col">Delete</th>    
							</tr>
						  </thead>
						  <tbody>
                            @foreach($system_employee as $employee)  
							<tr>
							  <td>{{$employee->name}}</td>
							  <td>{{$employee->email}}</td>
							  <td>{{$employee->number_id}}</td>
							  <td>{{$employee->age}}</td>
                              <td>{{$employee->phone}}</td> 
                                <td><a href="{{url('/system_employee/view_employee_details/'.$employee->id)}}" class="btn btn-info btn-sm">View details</a></td>
                                <td><a href="{{url('/system_employee/delete_employee/'.$employee->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                                    
							 </tr>
							@endforeach 
							 
						  </tbody>
					</table>	
			 </div>
      </div>
	  
	  </div>
      <!-- End of Main Content -->

	  
	@endsection