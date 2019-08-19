@extends('layouts.admin-master')

@section('head.title')
    Admin | Sub-Category | Edit
@stop

@section ('body.content')
	{!! Form::model($subcategory, ['route' => ['sub-categories.update', $subcategory->id], 'files' => true, 'method' => 'PUT']) !!}
		<div class="row">
		
			<div class="col-md-8">	
				{{ Form::label('name', "Name:") }}
				{{ Form::text('name', null, ["class" => 'form-control']) }}
				<br>
				<br>
				{{ Form::label('id_category', "Category:") }}
				{{ Form::select('id_category', $categories, null, ["class" => 'form-control']) }}
				<br>
				{{ Form::label('featured_image', 'Update Featured Image:') }}
				{{ Form::file('featured_image') }}
			</div>
			
			<div class="col-md-4">
				<div class="jumbotron">
					<dl class="dl-horizontal">
						<dt>Create At:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($subcategory->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Update:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($subcategory->updated_at)) }}</dd>
					</dl>
					<hr/>

					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('sub-categories.index', 'Cancel', array(), array('class' => 'btn btn-danger btn-block')) !!}
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