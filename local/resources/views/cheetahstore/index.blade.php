@extends('layouts.master')

@section('head.title')
	| {{ $category->name }}
@stop


@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>{{ $category->name }}</h1>
			<dl>
				<dt>Create At:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</dd>
			</dl>
			<dl>
				<dt>Last Update:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($category->created_at)) }}</dd>
			</dl>
		</div>
	</div>
</div>
	
@endsection