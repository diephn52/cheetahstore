@extends('layouts.master')

@section('head.title')
   	| Complete Cart
@stop

@section ('body.content')
	<div class="container" style="height: 1000px">
		<br><br><br>
		<div style="border: 5px solid #000; padding: 20px; background-color: rgba(0,0,0,.5); color: #fff">
			
			<h3>You have successfully ordered!</h3>

			<p>- Your purchase invoice has been sent to the email address in our Customer Information section.</p>

			<p>- Your products will be shipped to the address in our Customer Information section after 2 to 3 days from this time.</p>

			<p>- Delivery staff will contact you by phone number 24 hours before delivery.</p>

			<p>- Head office: 590 CMT8 st., Ward 11, District 3, HCMC</p>

			<p>- Thank you for using our Cheetah's products!</p>
		</div>
		<br>
		
		<button class="btn btn-warning"><a href="{{route('home')}}">Return Home</a></button>
	</div>

@endsection