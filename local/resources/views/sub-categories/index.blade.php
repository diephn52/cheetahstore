@extends('layouts.admin-master')

@section('head.title')
	Admin | Sub-Category
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<h1>Sub-Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th style="padding-left: 50px;">Name</th>
						<th style="padding-left: 50px;">Category</th>
						<th style="padding-left: 50px;">Image</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($subcategories as $subcategory)
					<tr>
						<td>{{ $subcategory->id }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->name }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->id_category }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->image }}</td>
						<td style="padding-left: 50px;">
							{!! Html::linkRoute('sub-categories.show', 'View', array($subcategory->id), array('class' => 'btn btn-success')) !!}
							{!! Html::linkRoute('sub-categories.edit', 'Edit', array($subcategory->id), array('class' => 'btn btn-primary')) !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<!-- Create pagination btn-->
			<div class="text-center" style="padding-left: 45%; padding-top: 50px">
				{!! $subcategories->links(); !!}
			</div>
		</div>
		<!-- end of .col-md-8-->

		<div class="col-md-4">
			<div class="jumbotron">
				{!! Form::open(['route' => 'sub-categories.store', 'files' => true ,'method' => 'POST']) !!}
					<h2>New Sub-Category</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
					{{ Form::label('id_category', 'Category:') }}
						<select name="id_category" class="form-control">
							@foreach($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					<br>
					{{ Form::label('featured_image', 'Upload Featured Image:') }}
					{{ Form::file('featured_image') }}
					
					<hr>
					{{ Form::submit('Create New Sub-Category', ['class' => 'btn btn-primary btn-block']) }}
	
				{!! Form::close() !!}
				<br><br>
				{!! Html::linkRoute('admin.dashboard', '<< Back to Admin dashboard', array(), array('class' => 'btn btn-warning btn-block')) !!}
			</div>
		</div>
	</div> <!-- end of .row-->
@endsection