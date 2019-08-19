@extends('layouts.admin-master')

@section('head.title')
    Admin | Product | Create
@stop

@section ('body.content')

	{!! Form::open(['route' => 'products.store', 'files' => true ,'method' => 'POST']) !!}
		<h2>New Product</h2>
		<div class="row">
			<div class="col-md-6">
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}

				{{ Form::label('id_sub_category', 'Sub-Category:') }}
			
					<select name="id_sub_category" class="form-control">
					
						@foreach($subcategories as $subcategory)
							<option value="{{ $subcategory->id }}">{{ $subcategory->id_category }} {{ $subcategory->name }}</option>
						@endforeach
						
					</select>
	
				{{ Form::label('unit_price', 'Unit_Price:') }}
				{{ Form::text('unit_price', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('promotion_price', 'Promotion_Price:') }}
				{{ Form::text('promotion_price', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('featured_image', 'Upload Featured Image:') }}
				{{ Form::file('featured_image') }}
				
				<br>
				{{ Form::label('color', 'Color:') }}
				{{ Form::text('color', null, ['class' => 'form-control', 'required' => '']) }}

			</div>
			<div class="col-md-6">
				{{ Form::label('size', 'Size:') }}
				{{ Form::text('size', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('SKU', 'SKU:') }}
				{{ Form::text('SKU', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}

				{{ Form::label('material', 'Material:') }}
				{{ Form::text('material', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}

				{{ Form::label('gender', 'Gender:') }}
				{{ Form::text('gender', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '10']) }}

				{{ Form::label('isNew', 'isNew:') }}
				{{ Form::text('isNew', null, ['class' => 'form-control', 'required' => '']) }}

				{{ Form::label('isSale', 'isSale:') }}
				{{ Form::text('isSale', null, ['class' => 'form-control', 'required' => '']) }}
			</div>
		</div>
		<hr>
		{{ Form::submit('Create New Product', ['class' => 'btn btn-primary btn-block']) }}

	{!! Form::close() !!}	
@endsection