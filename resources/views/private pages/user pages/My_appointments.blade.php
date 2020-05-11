@extends('layouts.private_pages_user')


    @section('content')

	


    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
		
			
			
            <div class="row justify-content-center">
             	
					

					  <div class="regervation_part_iner">
                        <form>
                            <h2>Edit an Appointment</h2>
                            <div class="form-row">
                                
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="genric-btn primary e-Small warning-border">Edit Now</a>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
				
					<br>

											
					<table class="table mt-10">
						  <thead>
							<tr>
							  <th scope="col">Date</th>
							  <th scope="col">Cost</th>
							  <th scope="col">Paid</th>
							  <th scope="col">Updated</th>
							  <th scope="col">Edit</th>
							  <th scope="col">Delete</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  
							  <td>16/5 3:00 pm</td>
							  <td>3000 s.p</td>
							  <td>Yes</td>
							  <td>No</td>
							  <td><a href="#" class="genric-btn primary e-small warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary e-Small danger-border">Delete</a></td>
							</tr>
							<tr>
							  
							  <td>16/5 3:00 pm</td>
							  <td>3000 s.p</td>
							  <td>Yes</td>
							  <td>No</td>
							  <td><a href="#" class="genric-btn primary e-small warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary e-Small danger-border">Delete</a></td>
							</tr>
							<tr>
							  
							  <td>16/5 3:00 pm</td>
							  <td>3000 s.p</td>
							  <td>Yes</td>
							  <td>No</td>
							  <td><a href="#" class="genric-btn primary e-small warning-border">Edit</td>
							  <td><a href="#" class="genric-btn primary e-Small danger-border">Delete</a></td>
							</tr>
						  </tbody>
					</table>	
												
						
                    </div>
					
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->


   @endsection