@extends('layouts.admin-master')

@section('head.title')
    Cheetah Admin
@stop

@section ('body.content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3" style="border: 5px solid rgba(80,80,80,1); border-radius: 15px;">
           <div class="row">
                <div class="col-md-12">
                    <h4>CHEETAH's ADMIN</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li style="padding-bottom: 5px;">
                            <a href="{{ route('categories.index')}}"><button class="btn btn-dark">Category</button></a>
                        </li>
                      
                        <li style="padding-bottom: 5px;">
                            <a href="{{ route('sub-categories.index')}}"><button class="btn btn-dark">Sub-Category</button></a>
                        </li>
                       
                        <li style="padding-bottom: 5px;">
                            <a href="{{ route('sliders.index')}}"><button class="btn btn-dark">Slider</button></a>
                        </li>
                     
                        <li style="padding-bottom: 5px;">
                            <a href="{{ route('products.index')}}"><button class="btn btn-dark">Product</button></a>
                        </li>
                      
                        <li style="padding-bottom: 5px;">
                            <a href="{{ route('admin.comments')}}"><button class="btn btn-dark">Comment</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="col-md-9">
            <center><h1>Customer's Information</h1></center>
            <br>
            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Cellphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone_number}}</td>                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
