@extends('layouts.master')

@section('head.title')
    | Cart
@stop
<script>
	function updateCart(qty,rowId){
		$.get(
			// Url
			'{{ asset('cart/update') }}',
			// Doi tuong
			{qty:qty,rowId:rowId},
			// Phuong thuc
			function(){
				location.reload();
			}
		);
	}
</script>

@section ('body.content')
	<div class="container-fluid p-0 section popular on-show">
		<div class="section-title">
            <h1>Cart</h1>
        </div>
        <br><br>
		@if(Cart::count()>=1)
			<form class="container">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Image</th>
							<th>Product's name</th>
							<th>Quantity</th>
							<th>Unit_Price</th>
							<th>Total</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($items as $item)
						<tr>	
							<td><img style="width: 100px; height: 100px" src="{{ asset('local/storage/images/' .$item->options->img) }}"></td>
							<td>{{ $item->name }}</td>
							<td>
								<div class="form-group">
									<input class="form-control" type="number" value="{{ $item->qty }}" onchange="updateCart(this.value,'{{ $item->rowId }}')">
								</div>
							</td>
							<td>
								<span class="price">{{ number_format($item->price,0,'.',',') }} VND</span>
							</td>
							<td>
								<span class="price">{{ number_format($item->price*$item->qty,0,'.',',') }} VND</span>
							</td>
							<td><a href="{{ asset('cart/delete/'.$item->rowId) }}"><i class="far fa-trash-alt"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</form>

			<div class="container" style="padding: 50px 10px">
					<h4>
						Total payment: <span class="total-price">{{ $total }} VND</span>
						<a href="{{ route('home') }}" type="button" class="btn btn-info">Continue buying</a>
						<a href="{{ asset('cart/delete/all') }}" type="button" class="btn btn-danger">Delete Cart</a>
						<a href="{{ route('invoice')}}"><button class="btn btn-warning">Print Invoice</button></a>
					</h4>
			</div>
			<div class="container">
				<br>
				<h2>Confirm Purchase</h2>
				<form method="post">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input required type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
					</div>
					<div class="form-group">
						<label for="name">Full Name:</label>
						<input required type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
					</div>
					<div class="form-group">
						<label for="phone">Phone number:</label>
						<input required type="number" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone_number}}">
					</div>
					<div class="form-group">
						<label for="add">Address:</label>
						<input required type="text" class="form-control" id="add" name="add" value="{{Auth::user()->address}}">
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-warning">Checkout</button>
					</div>
					<br><br>
					{{csrf_field()}}
				</form>
			</div>
			
	</div>
	@else
		<h2 style="margin: 400px 0; text-align: center;">Empty cart</h2>
	@endif
@endsection