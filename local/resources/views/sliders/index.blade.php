@extends('layouts.admin-master')

@section('head.title')
	Admin | Slider
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<h1>Slider</h1>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th style="padding-left: 150px;">Image</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($sliders as $slider)
					<tr>
						<td>{{ $slider->id }}</td>
						<td style="padding-left: 150px;">{{ $slider->image }}</td>
						<td style="padding-left: 250px;">
							{!! Html::linkRoute('sliders.show', 'View', array($slider->id), array('class' => 'btn btn-success')) !!}
							{!! Html::linkRoute('sliders.edit', 'Edit', array($slider->id), array('class' => 'btn btn-primary')) !!}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
			<!-- Create pagination btn-->
			<div class="text-center" style="padding-left: 45%; padding-top: 50px">
				{!! $sliders->links(); !!}
			</div>
		</div>
		<!-- end of .col-md-8-->

		<div class="col-md-4">
			<br>
			<div class="jumbotron">
				{!! Form::open(['route' => 'sliders.store', 'files' => true, 'method' => 'POST']) !!}
					<h2>New Slider</h2>
					<br>
					{{ Form::label('featured_image', 'Upload Featured Image:') }}
					{{ Form::file('featured_image') }}
					<br>
					<br>
					<hr>

					{{ Form::submit('Create New Slider', ['class' => 'btn btn-primary btn-block']) }}

				{!! Form::close() !!}
				<br><br>
				{!! Html::linkRoute('admin.dashboard', '<< Back to Admin dashboard', array(), array('class' => 'btn btn-warning btn-block')) !!}
			</div>
		</div>
	</div> <!-- end of .row-->
@endsection