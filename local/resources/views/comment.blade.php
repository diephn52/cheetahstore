@extends('layouts.admin-master')

@section('head.title')
	Admin | Comments
@stop

@section ('body.content')
	<div class="row">
		<div class="col-md-12">
			<h1>Comments</h1>
			<br>
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Content</th>
						<th>id_product</th>
						<th>Created at</th>
						<th>Updated at</th>
					</tr>
				</thead>
				<tbody>
					@foreach($comments as $comm)
						<tr>
							<td>{{$comm->id}}</td>
							<td>{{$comm->name}}</td>
							<td>{{$comm->email}}</td>
							<td>{{$comm->content}}</td>
							<td>{{$comm->id_product}}</td>
							<td>{{$comm->created_at}}</td>
							<td>{{$comm->updated_at}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		</div>
		<!-- end of .col-md-12-->
	</div> <!-- end of .row-->
	{!! Html::linkRoute('admin.dashboard', '<< Back to Admin dashboard', array(), array('class' => 'btn btn-warning btn-block')) !!}
@endsection