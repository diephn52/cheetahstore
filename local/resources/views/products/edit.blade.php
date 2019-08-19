@extends('layouts.admin-master')

@section('head.title')
    Admin | Product | Edit
@stop

@section ('body.content')
	{!! Form::model($product, ['route' => ['products.update', $product->id], 'files' => true, 'method' => 'PUT']) !!}
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', 'Name:') }}
						{{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}
						<br>

						{{ Form::label('id_sub_category', "SubCategory:") }}
						{{ Form::select('id_sub_category', $subcategories, null, ["class" => 'form-control']) }}
						<br>

						{{ Form::label('unit_price', 'Unit_Price:') }}
						{{ Form::text('unit_price', null, ['class' => 'form-control', 'required' => '']) }}
						<br>

						{{ Form::label('promotion_price', 'Promotion_Price:') }}
						{{ Form::text('promotion_price', null, ['class' => 'form-control', 'required' => '']) }}
						<br>

						{{ Form::label('featured_image', 'Upload Featured Image:') }}
						{{ Form::file('featured_image') }}
						<br><br>

						{{ Form::label('color', 'Color:') }}
						{{ Form::text('color', null, ['class' => 'form-control', 'required' => '']) }}
					</div>
					<div class="col-md-6">
						{{ Form::label('size', 'Size:') }}
						{{ Form::text('size', null, ['class' => 'form-control', 'required' => '']) }}
						<br>

						{{ Form::label('SKU', 'SKU:') }}
						{{ Form::text('SKU', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}
						<br>

						{{ Form::label('material', 'Material:') }}
						{{ Form::text('material', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}
						<br>

						{{ Form::label('gender', 'Gender:') }}
						{{ Form::text('gender', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '10']) }}
						<br>

						{{ Form::label('isNew', 'isNew:') }}
						{{ Form::text('isNew', null, ['class' => 'form-control', 'required' => '']) }}
						<br>

						{{ Form::label('isSale', 'isSale:') }}
						{{ Form::text('isSale', null, ['class' => 'form-control', 'required' => '']) }}
					</div>	
				</div>
			</div>			
			<div class="col-md-4">
				<div class="jumbotron">
					<dl class="dl-horizontal">
						<dt>Create At:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Update:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</dd>
					</dl>
					<hr/>

					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('products.index', 'Cancel', array(), array('class' => 'btn btn-danger btn-block')) !!}
						</div>
						<div class="col-sm-6">	
							{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}				
						</div>
					</div>
				</div>
			</div>
		</div><!-- end of .row(form)-->
	{!! Form::close() !!}
@endsection