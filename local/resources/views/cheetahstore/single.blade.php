@extends('layouts.master')

@section('head.title')
	| {{ $category->name }}
@stop


@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			{{-- <img src="{{ asset('images/'.$subcategory->image) }}" height="400" width="400" /> --}}
			<h1>{{ $category->name }}</h1>

		</div>
	</div>
</div>
	
@endsection