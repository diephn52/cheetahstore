@extends('layouts.admin-master')

@section('head.title')
	Admin | Category
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th style="padding-left: 100px;">Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td style="padding-left: 100px;">{{ $category->name }}</td>
						<td style="padding-left: 350px;">
							{!! Html::linkRoute('categories.show', 'View', array($category->id), array('class' => 'btn btn-success')) !!}
							{!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-primary')) !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
			<!-- Create pagination btn-->
			<div class="text-center" style="padding-left: 45%; padding-top: 50px">
				{!! $categories->links(); !!}
			</div>
		</div>
		<!-- end of .col-md-8-->

		<div class="col-md-4">
			<br>
			<div class="jumbotron">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
					<h2>New Category</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) }}
					<br>

					{{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block']) }}

				{!! Form::close() !!}
				<br>
				<br>
			{!! Html::linkRoute('admin.dashboard', '<< Back to Admin dashboard', array(), array('class' => 'btn btn-warning btn-block')) !!}
			</div>
		</div>
	</div> <!-- end of .row-->
@endsection