@extends('layouts.master')

@section('head.title')
    | {{ $product->name }}
@stop

@section ('body.content')

<!--CONTENT-->
<section class="content-page">
    <!--SECTION-->
    <div class="section popular on-show">
        <div class="section-title">
            <h1>
                @foreach($subcategories as $sub)
                    @if($product->id_sub_category==$sub->id)                   
                        {{$sub->name}}
                    @endif
                @endforeach
            </h1>
            <span class="tilte-bg"></span>
            <h2>{{$product->name}}</h2>
            <br><br>
        </div>
        <!--POPULAR-CONTENT-WRAP-->
        <div class="popular-col-wrap row">
            <center class="col-md-12">
                <div class="products">
                    <div class="info-box">
                        <div class="info-left">
                            <p><b>SKU: {{$product->SKU}}</b></p>
                            <p><b>Material: {{$product->material}}</b></p>
                            <p><b>Gender: {{$product->gender}}</b></p>
                        </div>
                        <div class="info-right">
                            <div class="price">
                                @if($product->promotion_price==0)
                                    <span><b>{{ number_format($product->unit_price,0,'.',',') }} VND</b></span>
                                @else 
                                VND                                               
                                    <del class="cost-price">{{ number_format($product->unit_price,0,'.',',') }}</del> <span class="sale-price">{{ number_format($product->promotion_price,0,'.',',') }}</span>
                                @endif
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </center>
            <div class="col-md-12">
                <center><a href="{{asset('cart/add/'.$product->id)}}"><img style="width: 800px; height: 512px;" src="{{ asset('local/storage/images/' . $product->image) }}" alt="{{$product->name}}"><button class="btn btn-warning addCart">Add to cart</button></a></center>
            </div>
            <div class="col-md-12">
                <div class="des-products">
                    <center><b> Color: {{$product->color}}</b></center>
                    <br>
                    <center><b>Size: {{$product->size}}</b></center>
                </div>    
            </div>
        </div>
        <!--/POPULAR-CONTENT-WRAP-->
            <div class="container" style="text-align: left; margin-top: 80px; margin-bottom: 80px;">
                <br>
                <h2>Comment</h2>
                <br>
                <div class="row">                   
                    <div class="col-md-9">
                        <form method="post">
                            <div class="form-group" style="display: none;">
                                <label for="text">Name:</label>
                                <input required type="text" class="form-control" id="name" name="name" value="@if (Auth::check()) {{Auth::user()->name}} @endif">
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="text">Email address:</label>
                                <input required type="email" class="form-control" id="email" name="email" value="@if (Auth::check()) {{Auth::user()->email}} @endif">
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="content" cols="110" rows="5"></textarea>
                            </div>
                            <div class="form-group text-right">
                            @if(Auth::check())
                                <button type="submit" class="btn btn-warning">Send</button>
                            @else
                                <button type="submit" class="btn btn-warning"><a href="{{ route('login') }}">Send</a></button>
                            @endif
                               
                            </div>
                            <br><br>
                            {{csrf_field()}}
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        @foreach($comments as $comment)
                            <div class="container mt-3">
                                <div class="media border p-3">
                                    <div class="media-body">
                                        <h4>{{ $comment->name }}<small><i> Posted on {{ date('d/m/Y H:i'),strtotime($comment->created_at) }}</i></small></h4>
                                        <p>{{ $comment->content }}</p>
                                        <!-- Comment reply form  -->
                                        {{-- <div style="margin-left: 10px;">
                                            <a style="cursor: pointer;" id="{{$comment->id}}" name="@if (Auth::check()) {{Auth::user()->name}} @endif" token="{{csrf_token()}}">Reply</a>&nbsp;
                                            <a style="cursor: pointer;" id="{{$comment->id}}" token="{{csrf_token()}}">Delete</a>

                                            @foreach($comment->replies as $rep)
                                                @if($comment->id === $rep->comment_id)
                                                    <div class="media border p-3">
                                                        <div class="media-body">
                                                            <i><b>{{ $rep->name }}</b></i>&nbsp;&nbsp;
                                                            <span>{{ $rep->reply }}</span>
                                                            <!-- Comment reply form  -->
                                                            <div style="margin-left: 10px;">
                                                                <a id="{{$comment->id}}" name="@if (Auth::check()) {{Auth::user()->name}} @endif" token="{{csrf_token()}}">Reply</a>&nbsp;
                                                                <a id="{{$rep->id}}" token="{{csrf_token()}}">Delete</a>
                                                            </div>  
                                                        </div>
                                                    </div>                                          
    
                                                @endif
                                            @endforeach

                                        </div>         --}}
                                        


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!--/POPULAR-CONTENT-LIST-->
        <div class="section on-show">
            <div class="go-to-list">
                <a href="{{ route('home') }}">back</a>
            </div>
        </div>
</section>
<!--/CONTENT-->

@endsection
