@extends('layouts.master')

@section('head.title')
    
@stop

@section ('body.content')

<!--CONTENT-->
<section class="content-page">
    <!--SECTION-->
    <div class="section popular on-show">
        <div class="section-title">
            <h1>New Arrival</h1>
        </div>
        <!--POPULAR NAV-->
        <div class="section-box popular-nav">
            <div class="popular-nav-wrap">
         
                <div class="popular-nav-item">
                    <h2>Men</h2>
                    <div class="popular-nav-pic">
                        <img src="{{ asset('img/men.png') }}" alt="Men">
                    </div>
                    <a id="nav-1" href=""></a>
                </div>

                <div class="popular-nav-item">
                    <h2>Women</h2>
                    <div class="popular-nav-pic">
                        <img src="{{ asset('img/women.png') }}" alt="Women">
                    </div>
                    <a id="nav-2" href=""></a>
                </div>

                <div class="popular-nav-item">
                    <h2>Kids</h2>
                    <div class="popular-nav-pic">
                        <img src="{{ asset('img/kids.png') }}" alt="Kids">
                    </div>
                    <a id="nav-3" href=""></a>
                </div>

                <span class="popular-arrow" style="left: 15%"></span>
            </div>
        </div>
        <!--/POPULAR LIST-->

        <!--POPULAR-CONTENT-LIST-->
        <div class="section-box popular-list on-show">
            <!--POPULAR-CONTENT-WRAP-->
            <div class="popular-content-wrap">
                <!--POPULAR-COL (slider 1)-->
                <div class="popular-col" id="col-1">
                    <!--1st row of 4 shoes box-->
                    <div class="popular-col-wrap row">
                        <!--1st shoes box-->
                        @foreach($products as $item)
                            @if(($item->id_sub_category>5) && ($item->id_sub_category < 11))
                                <div class="popular-box">
                                    @if($item->isNew==1)
                                        <div class="icon-new"></div>               
                                    @endif
                                    @if($item->isSale==1)
                                        <div class="icon-sale"></div>
                                    @endif
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
                                            <span>{{ number_format($item->unit_price,0,'.',',') }} VND</span> 
                                        </div>
                                    </div>     
                                    <a class="go-detail" href="{{route('product',['id'=>$item->id])}}"></a>  
                            
                                </div> 
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--/POPULAR-COL (slider 1)-->

                <!--POPULAR-COL (slider 2)-->
                <div class="popular-col" id="col-2">
                    <!--1st row of 4 shoes box-->
                    <div class="popular-col-wrap row">
                        <!--1st shoes box-->
                        @foreach($products as $item)
                            @if($item->id_sub_category < 6)
                                <div class="popular-box">
                                    @if($item->isNew==1)
                                        <div class="icon-new"></div>               
                                    @endif
                                    @if($item->isSale==1)
                                        <div class="icon-sale"></div>
                                    @endif
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
                                            <span>{{ number_format($item->unit_price,0,'.',',') }} VND</span> 
                                        </div>
                                    </div>
                                    <a class="go-detail" href="{{route('product',['id'=>$item->id])}}"></a>   
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--/POPULAR-COL (slider 2)-->

                <!--POPULAR-COL (slider 3)-->
                <div class="popular-col" id="col-3">
                    <!--1st row of 4 shoes box-->
                    <div class="popular-col-wrap row">
                        <!--1st shoes box-->
                        @foreach($products as $item)
                            @if($item->id_sub_category>10)
                                <div class="popular-box">
                                    @if($item->isNew==1)
                                        <div class="icon-new"></div>               
                                    @endif
                                    @if($item->isSale==1)
                                        <div class="icon-sale"></div>
                                    @endif
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
                                            <span>{{ number_format($item->unit_price,0,'.',',') }} VND</span> 
                                        </div>
                                    </div>
                                    <a class="go-detail" href="{{route('product',['id'=>$item->id])}}"></a>   
                                    
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--/POPULAR-COL (slider 3)-->
            </div>
            <!--/POPULAR-CONTENT-WRAP-->
        </div>
        <!--/POPULAR-CONTENT-LIST-->
    </div>
    <!--/SECTION-->
    <!--SHORTCUT-->
    <div class="section shortcut on-show" id="shortcut"> <!--2 circles box above footer-->
        <div class="section-box">
            <div class="shortcut-box on-show">
                <div class="shortcut-pic">
                    <img src="{{asset('img/apparel-300517.jpg')}}" alt="Classic">
                </div>
                @foreach($subcategories as $subcatalog) 
                    @if($subcatalog->id_category==1)                
                        <a href="{{route('products',['id'=>$subcatalog->id]=2)}}"></a>
                    @endif
                @endforeach 
            </div>
            <div class="shortcut-box on-show">
                <div class="shortcut-pic">
                    <img src="{{asset('img/access-300517.jpg')}}" alt="Bags">
                </div>
                @foreach($subcategories as $subcatalog) 
                    @if($subcatalog->id_category==1)                
                        <a href="{{route('products',['id'=>$subcatalog->id]=3)}}"></a>
                    @endif
                @endforeach          
            </div>
        </div>
    </div>
    <!--/SHORTCUT-->
</section>
<!--/CONTENT-->

@endsection
