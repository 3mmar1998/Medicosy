
	@extends('layouts.private_pages_secretary')


    @section('content')

	<!--   Clinic Info --> 
	
        <div class="container clinic-info">
            <div class="row">
             	
				
				
				 <div class="col-md-3 col-lg-6 col-sm-1 mt-5">	

					<form action="#">
					
							<div class="mt-10 form-group col-md-12">
							
							<h2>Edit Clinic Info<h2>
							</div>
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="Name" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input   class="form-control" placeholder="Telephone" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
						
							<div class="mt-10 form-group col-md-12">
								<a href="#" class="genric-btn primary  primary-border warning-border">Edit</a>
							</div>
						
						
							
							
						</form>
						
						
					   <div class="col-md-3 col-lg-12 col-sm-1 mt-5">	
							
							<div class=" justify-content-center">
							
							<h2>MAP</h2>
							
							<map name="primary">
							<area shape="circle" coords="75,75,75" href="left.html">
							<area shape="circle" coords="275,75,75" href="right.html">
							</map>
							<img usemap="#primary" src="https://placehold.it/350x150" alt="500 x 150 pic">
							<div class="mt-5"><a href="#" class="genric-btn primary  primary-border warning-border ">Edit</a></div>	
						</div>
						</div>
					   
						
						
						</div>
				
			  





				
               
			   <div class="col-md-3 col-lg-6 col-sm-1 mt-5">	

					<form action="#">
					
							<div class=" mt-10 form-group col-md-12">
							
							<h2>Add Doctor<h2>
							</div>
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="First name" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="Last name" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input   class="form-control" placeholder="Age" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input class="form-control" placeholder="Specialize" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="phone" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="Email" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
							
							
							<div class="mt-10 form-group col-md-12">
								<input  class="form-control" placeholder="Password" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Message'" required></textarea>
							</div>
						
						
							<div class="mt-10 form-group col-md-12">
								<a href="#" class="genric-btn primary  primary-border">Add</a>

							</div>
						
						
							
							
						</form>
						</div>
				
			   	
			
			   
			   
			   <div class="col-md-3 col-lg-12 cos-sm-12   mt-5">	

					  <table class=" mt-10 table-custom">
						  <thead>
							<tr>
							  <th scope="col">Name</th> 			
							  <th scope="col">Address</th>
							  <th scope="col">Age</th>
							  <th scope="col">Birth</th>
							  <th scope="col">Specialize</th>
							  <th scope="col">Email</th>
							  <th scope="col">Edit</th>
							  <th scope="col">Delete</th>	
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							 
							 <tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							<tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							<tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							<tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							<tr>
							  <td>jack spark</td>
							  <td>Damas</td>
							  <td>40</td>
							  <td>9/3/1972</td>
							  <td>hurt</td>
							  <td>Jack@gmail.com</td>
							  
							  <td><a href="#" class="genric-btn primary  warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary  danger-border">Delete</a></td>
							</tr>
							
						  </tbody>
					</table>	
					
               </div>	   
			   
			   
			   
			   
			   
			   
			   
			   
			   
        </div>
		</div>
    
	
	<!-- End Clinic Info Part -->		
	



@endsection