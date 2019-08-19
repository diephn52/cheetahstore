@extends('layouts.admin-master')

@section('head.title')
	Admin | Product
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-3">
			{!! Html::linkRoute('admin.dashboard', '<< Back to Admin dashboard', array(), array('class' => 'btn btn-warning btn-block')) !!}
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-3">
			{!! Html::linkRoute('products.create', 'Create New Product', array(), array('class' => 'btn btn-danger btn-block')) !!}
		</div>	
	</div>
	<br>

	<div class="row">
		<h1>Product</h1>
		<br><br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="padding: 5px 10px;">Id</th>
						<th style="padding: 5px 100px;">Name</th>
						<th style="padding: 5px 10px;">SubCategory</th>
						<th style="padding: 5px 30px;">Unit_Price</th>
						<th style="padding: 5px 20px;">Promotion_Price</th>					
			
						<th style="padding: 5px 20px;">Gender</th>
						<th style="padding: 5px 10px;">isNew</th>
						<th style="padding: 5px 10px;">isSale</th>
						<th style="padding: 5px 80px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->id_sub_category }}</td>
							<td>{{ $product->unit_price }}</td>
							<td>{{ $product->promotion_price }}</td>
												
							<td>{{ $product->gender }}</td>
							<td>{{ $product->isNew }}</td>
							<td>{{ $product->isSale }}</td>
							<td>
								{!! Html::linkRoute('products.show', 'View', array($product->id), array('class' => 'btn btn-success')) !!}
								{!! Html::linkRoute('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-primary')) !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
		<!-- Create pagination btn-->
		<div class="text-center" style="padding-left: 45%; padding-top: 50px">
			{!! $products->links(); !!}
		</div>
	</div> <!-- end of .row-->
	<br><br><br>
	
@endsection