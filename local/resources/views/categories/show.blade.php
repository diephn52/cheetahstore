@extends('layouts.admin-master')

@section('head.title')
    Admin | Category | {{ $category->name }}
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $category->name }}</h1>
			{{-- <h2>{{ $category->slug }}</h2> --}}
		</div>
		<div class="col-md-4">
			<div class="jumbotron">
				<dl>
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</dd>
				</dl>
				<dl>
					<dt>Last Update:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($category->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">		
						{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}			

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>
				<div class="row" style="justify-content: center; margin-top: 20px;">
					{!! Html::linkRoute('categories.index', '<< See all Category', array(), array('class' => 'btn btn-primary btn-block')) !!}
				</div>
			</div>
		</div>
	</div>
@endsection