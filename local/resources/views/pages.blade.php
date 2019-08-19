@extends('layouts.master')

@section('head.title')
    | {{$cate->name}}
@stop

@section ('body.content')

<!--CONTENT-->
<section class="content-page">
    <!--SECTION-->
    <div class="section popular on-show">
        <div class="section-title">
            <h1>{{$cate->name}}</h1>
        </div>

        <!--POPULAR-CONTENT-LIST-->
        <div class="section-box popular-list on-show" >
            <!--POPULAR-CONTENT-WRAP-->
            <div class="popular-content-wrap">
                <div class="popular-col">
                    <!--1st row of 4 shoes box-->
                    <div class="popular-col-wrap row">
                        <!--1st shoes box-->
                        @foreach($items as $product)
                                <div class="popular-box">
                                    @if($product->isNew==1)
                                        <div class="icon-new"></div>               
                                    @endif
                                    @if($product->isSale==1)
                                        <div class="icon-sale"></div>
                                    @endif
                                    @foreach($subcategories as $subcate)
                                        @if($product->id_sub_category==$subcate->id)
                                            <span class="note">{{$subcate->name}}</span>
                                        @endif
                                    @endforeach
                                    <div class="popular-box-pic">
                                        <img src="{{ asset('local/storage/images/' . $product->image) }}" alt="{{$product->name}}">
                                    </div>
                                    <div class="popular-box-text">
                                        <h3>{{$product->name}}</h3>
                                        <h4># {{$product->SKU}}</h4>
                                        <div class="price">
                                            @if($product->promotion_price==0)
                                                <span><b>{{ number_format($product->unit_price,0,'.',',') }} VND</b></span> 
                                            @else 
                                                VND                                               
                                                <del class="cost-price">{{ number_format($product->unit_price,0,'.',',') }}</del> <span class="sale-price">{{ number_format($product->promotion_price,0,'.',',') }}</span>
                                            @endif 
                                        </div>
                                    </div>
                                    <a href="{{route('product',['id'=>$product->id])}}"></a>
                                </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!--/POPULAR-CONTENT-WRAP-->
        </div>
        <!--/POPULAR-CONTENT-LIST-->
    </div>
    <!--/SECTION-->
</section>
<!--/CONTENT-->

@endsection
