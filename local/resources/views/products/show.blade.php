@extends('layouts.admin-master')

@section('head.title')
    Admin | Product | {{ $product->name }}
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="padding: 5px 10px;">Id</th>
							<th style="padding: 5px 100px;">Name</th>
							<th style="padding: 5px 10px;">SubCategory</th>
							<th style="padding: 5px 30px;">Unit_Price</th>
							<th style="padding: 5px 20px;">Promotion_Price</th>
							<th style="padding: 5px 50px;">Image</th>
							<th style="padding: 5px 50px;">Color</th>
							<th style="padding: 5px 20px;">Size</th>
							<th style="padding: 5px 20px;">SKU</th>
							<th style="padding: 5px 20px;">Material</th>
							<th style="padding: 5px 20px;">Gender</th>
							<th style="padding: 5px 10px;">isNew</th>
							<th style="padding: 5px 10px;">isSale</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->id_sub_category }}</td>
							<td>{{ $product->unit_price }}</td>
							<td>{{ $product->promotion_price }}</td>
							<td>{{ $product->image }}</td>
							<td>{{ $product->color }}</td>
							<td>{{ $product->size }}</td>
							<td>{{ $product->SKU }}</td>
							<td>{{ $product->material }}</td>
							<td>{{ $product->gender }}</td>
							<td>{{ $product->isNew }}</td>
							<td>{{ $product->isSale }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="jumbotron">
				<dl>
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</dd>
				</dl>
				<dl>
					<dt>Last Update:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">		
						{!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}			

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>		
				</div>
				<hr>
				<div class="row" style="justify-content: center;">
					{!! Html::linkRoute('products.index', '<< See all Products', array(), array('class' => 'btn btn-info btn-block')) !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection