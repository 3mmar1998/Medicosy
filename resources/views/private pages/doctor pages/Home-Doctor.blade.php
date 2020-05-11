@extends('layouts.private_pages_doctor')

@section('content')

	
	<!--   Clinic Info --> 
	
        <div class="container clinic-info">
            <div class="row">
             	
						
               
			   <div class="col-md-3 col-lg-4 col-sm-1 mt-5">	

					<form action="#">
					
							<div class=" mt-10 form-group col-md-12">
							
							<h2>Edit My Info<h2>
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
								<a href="#" class="genric-btn primary  primary-border warning-border">Edit</a>

							</div>
						
						
							
							
						</form>
						</div>
				
			   	
			
			   
			   
			   <div class="col-md-3 col-lg-8 col-sm-1 mt-5">	

					  
					 <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('img-custom/blog/single_blog_4.png')}}" alt=""> 
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>jack </h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
					 <form action="#">
					<div class="mt-10 form-group col-md-12">
					<input  class="form-control" placeholder="Type your Comment" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'Message'" required></textarea>
					</div>
				    <div class="mt-10 form-group col-md-12">
					<a href="#" class="genric-btn primary  primary-border ">Comment</a>
				    </div>
				    </form>			
								
					<div class="comments-area">
                  <h4>05 Comments</h4>

                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <!--<div class="thumb">
                              <img src="img/comment/comment_3.png" alt="">
                           </div>-->
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
					
								
                            </div>
                        </article>

						
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
               </div>	   
			   
			   
			   
			   
			   
			   
			   
			   
			   
        </div>
		</div>
    
	
	<!-- End Clinic Info Part -->		
	

@endsection


