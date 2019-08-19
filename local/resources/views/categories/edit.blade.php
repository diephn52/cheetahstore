@extends('layouts.admin-master')

@section('head.title')
    Admin | Category | Edit
@stop

@section ('body.content')
	{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
		<div class="row">
		
			<div class="col-md-8">	
				{{ Form::label('name', "Name:") }}
				{{ Form::text('name', null, ["class" => 'form-control']) }}
				<br>
			</div>
			
			<div class="col-md-4">
				<div class="jumbotron">
					<dl class="dl-horizontal">
						<dt>Create At:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>Last Update:</dt>
						<dd>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</dd>
					</dl>
					<hr/>

					<div class="row">
						<div class="col-sm-6">
							{!! Html::linkRoute('categories.index', 'Cancel', array(), array('class' => 'btn btn-danger btn-block')) !!}
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