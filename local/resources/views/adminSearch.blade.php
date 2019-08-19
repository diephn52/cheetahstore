@extends('layouts.admin-master')

@section('head.title')
Cheetah Admin
@stop

@section ('body.content')
<div class="col-md-12">
	<div class="row">
		<div class="col-md-8">
			<h1>Result finding for <i>{{ $keyword }}</i></h1>
		</div>
		<div class="col-md-4"></div>
		
	</div>
	<br><hr>
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
						<th style="padding: 5px 50px;">Image</th>
						<th style="padding: 5px 50px;">Color</th>
						<th style="padding: 5px 20px;">Size</th>
						<th style="padding: 5px 20px;">SKU</th>
						<th style="padding: 5px 20px;">Material</th>
						<th style="padding: 5px 20px;">Gender</th>
						<th style="padding: 5px 10px;">isNew</th>
						<th style="padding: 5px 10px;">isSale</th>
						<th style="padding: 5px 80px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->name }}</td>
						<td>{{ $item->id_sub_category }}</td>
						<td>{{ $item->unit_price }}</td>
						<td>{{ $item->promotion_price }}</td>
						<td>{{ $item->image }}</td>
						<td>{{ $item->color }}</td>
						<td>{{ $item->size }}</td>
						<td>{{ $item->SKU }}</td>
						<td>{{ $item->material }}</td>
						<td>{{ $item->gender }}</td>
						<td>{{ $item->isNew }}</td>
						<td>{{ $item->isSale }}</td>
						<td>
							{!! Html::linkRoute('products.show', 'View', array($item->id), array('class' => 'btn btn-success')) !!}
							{!! Html::linkRoute('products.edit', 'Edit', array($item->id), array('class' => 'btn btn-primary')) !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		
	</div> <!-- end of .row-->
</div>
@endsection