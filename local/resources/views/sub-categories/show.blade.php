@extends('layouts.admin-master')

@section('head.title')
    Admin | Sub-Category | {{ $subcategory->name }}
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-8">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th style="padding-left: 50px;">Name</th>
						<th style="padding-left: 50px;">Category</th>
						<th style="padding-left: 50px;">Image</th>						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $subcategory->id }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->name }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->id_category }}</td>
						<td style="padding-left: 50px;">{{ $subcategory->image }}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-4">
			<div class="jumbotron">
				<dl>
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($subcategory->created_at)) }}</dd>
				</dl>
				<dl>
					<dt>Last Update:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($subcategory->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('sub-categories.edit', 'Edit', array($subcategory->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">		
						{!! Form::open(['route' => ['sub-categories.destroy', $subcategory->id], 'method' => 'DELETE']) !!}			

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>		
				</div>
				<hr>
				<div class="row" style="justify-content: center;">
					{!! Html::linkRoute('sub-categories.index', '<< See all Sub-Category', array(), array('class' => 'btn btn-info btn-block')) !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection