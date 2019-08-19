@extends('layouts.admin-master')

@section('head.title')
    Admin | Slider | Edit
@stop

@section ('body.content')
{!! Form::model($slider, ['route' => ['sliders.update', $slider->id], 'files' => true, 'method' => 'PUT']) !!}
	<div class="row">
		<div class="col-md-8">	
			<br>
			{{ Form::label('featured_image', 'Update Featured Image:') }}
			{{ Form::file('featured_image') }}
		</div>

		<div class="col-md-4">
			<div class="jumbotron">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($slider->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Update:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($slider->updated_at)) }}</dd>
				</dl>
				<hr/>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('sliders.index', 'Cancel', array(), array('class' => 'btn btn-danger btn-block')) !!}
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