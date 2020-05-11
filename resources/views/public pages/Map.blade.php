@extends('layouts.public_pages_app')

@section('content')



    <!-- Map clinics part start-->

	
	<section class="feature_part">
	<div class="container">
		<div class="justify-content-center">
			
		<div class="Clinics-Map justify-content-center">
			
				<h2>MAP</h2>
		<map name="primary">
		<area shape="circle" coords="75,75,75" href="left.html">
		<area shape="circle" coords="275,75,75" href="right.html">
		</map>
		<img usemap="#primary" src="https://placehold.it/350x150" alt="350 x 150 pic">
			</div>

		
			
		</div>
		
	</div>
	</section>	
	<!--end Map clinics part -->

		<br>
	@endsection