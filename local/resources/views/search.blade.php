@extends('layouts.master')

@section('head.title')
    | Search
@stop

@section ('body.content')
    <!--CONTENT-->
    <section class="content-page">
        <!--SECTION-->
        <div class="section popular on-show">
            <div class="section-title">
                <h1>Result finding for {{ $keyword }}</h1>
                 
            </div>
            <!--POPULAR-CONTENT-LIST-->
            <div class="section-box popular-list"  >
                <!--POPULAR-CONTENT-WRAP-->
                <div class="popular-content-wrap">
                    <!--POPULAR-COL (slider 1)-->
                    <div class="popular-col">
                        <!--1st row of 4 shoes box-->
                        <div class="popular-col-wrap row">
                            <!--1st shoes box-->
                            @foreach($items as $item)
                            <div class="popular-box">
                                     @foreach($subcategories as $subcate)
                                        @if($item->id_sub_category==$subcate->id)
                                            <span class="note">{{$subcate->name}}</span>
                                        @endif
                                    @endforeach
                                    <div class="popular-box-pic">
                                        <img src="{{ asset('local/storage/images/' . $item->image) }}" alt="{{$item->name}}">
                                    </div>
                                    <div class="popular-box-text">
                                        <h3>{{$item->name}}</h3>
                                        <h4># {{$item->SKU}}</h4>
                                        <div class="price">
                                            @if($item->promotion_price==0)
                                                <span><b>{{ number_format($item->unit_price,0,'.',',') }} VND</b></span> 
                                            @else 
                                                VND                                               
                                                <del class="cost-price">{{ number_format($item->unit_price,0,'.',',') }}</del> <span class="sale-price">{{ number_format($item->promotion_price,0,'.',',') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <a class="go-detail" href="{{route('product',['id'=>$item->id])}}"></a>  
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--/POPULAR-COL (slider 1)-->
                </div>
                <!--/POPULAR-CONTENT-WRAP-->
            </div>
            <!--/POPULAR-CONTENT-LIST-->
        </div>
        <!--/SECTION-->
    </section>
    <!--/CONTENT-->
@endsection

    

