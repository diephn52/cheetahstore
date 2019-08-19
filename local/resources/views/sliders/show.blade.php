@extends('layouts.admin-master')

@section('head.title')
    Admin | Slider | {{ $slider->image }}
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">	
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th style="padding-left: 150px;">Image</th>						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $slider->id }}</td>
						<td style="padding-left: 150px;">{{ $slider->image }}</td>
					</tr>
				</tbody>
			</table>	
		</div>
		<div class="col-md-4">
			<div class="jumbotron">
				<dl>
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($slider->created_at)) }}</dd>
				</dl>
				<dl>
					<dt>Last Update:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($slider->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('sliders.edit', 'Edit', array($slider->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">		
						{!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'DELETE']) !!}			

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>
				<div class="row" style="justify-content: center; margin-top: 20px;">
					{!! Html::linkRoute('sliders.index', '<< See all Sliders', array(), array('class' => 'btn btn-primary btn-block')) !!}
				</div>
			</div>
		</div>
	</div>
@endsection