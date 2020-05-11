
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

          <!-- Content Row -->
          <div class="row">

        
            <!-- Pending Requests Card Example -->
            
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">users Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">secretaries Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$secretary_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">doctors Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$doctor_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">employees Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$employee_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">clinics Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$clinic_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Posts Counts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$post_count}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
          </div>

      </div>
      <!-- End of Main Content -->

@endsection	  
	  
	  
	  
