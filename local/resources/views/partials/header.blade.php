<!--LOAD PAGE-->
<div class="nav-click show"><span></span></div>
<!--/LOAD PAGE-->
<!--LOGO-->
<div class="logo" id="logo">
	<a href="{{ route('home') }}">
		<img src="{{ asset('img/logo.png') }}" alt="Cheetah Store">
	</a>
</div>
<!--/LOGO-->

<!--HEADER-->
<section class="header show" id="myHeader">
	<div class="top">
		<!--RIGHT-->
		<div class="right" id="right">
			<!--SEARCH-->
			<div class="search-box">
				<div id="search-bar"> 
					<form class="navbar-form" role='search' method='get' action='{{ asset('search/') }}' >
						<div class="input-group">
							<div class="input-group-btn">
								<input type="text" class="form-control search-form-input" placeholder="Searching ..." name='result'>
							</div>
							<div class="input-group-btn">
								<button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--/SEARCH-->
		</div>
		<!--/RIGHT-->

		<!--NAVIGATION-->
		<div class="navigation" id="navigation">
			<!--NAV-->
			<div class="nav" id="nav">
				<ul>
					@foreach($categories as $catalog)
						@if($catalog->id==1)
							<li class="sub1">
								<a class="has-sub" href="{{asset('pages/'.$catalog->id).'.html'}}">
									<span class="collapSub"></span>{{ $catalog->name }}
								</a>
								<div class="sub-menu">
									<!--GROUP-->
									<div class="all-sub">	
										@foreach($subcategories as $subcatalog)	
											@if($subcatalog->id_category==1)				
												<div class="sub-item">
													<a href="{{route('products',['id'=>$subcatalog->id])}}">
														<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
														<span>{{ $subcatalog->name }}</span>
													</a>
												</div>
											@endif
										@endforeach	
									</div>
									<!--/GROUP-->
								</div>
							</li>
						@elseif($catalog->id==2)
							<li class="sub2">
								<a class="has-sub" href="{{asset('pages/'.$catalog->id).'.html'}}">
									<span class="collapSub"></span>{{ $catalog->name }}
								</a>
								<div class="sub-menu">
									<!--GROUP-->
									<div class="all-sub">	
										@foreach($subcategories as $subcatalog)	
											@if($subcatalog->id_category==2)				
												<div class="sub-item">
													<a href="{{route('products',['id'=>$subcatalog->id])}}">
														<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
														<span>{{ $subcatalog->name }}</span>
													</a>
												</div>
											@endif
										@endforeach	
									</div>
									<!--/GROUP-->
								</div>
							</li>
						@else
							<li class="sub3">
								<a class="has-sub" href="{{asset('pages/'.$catalog->id).'.html'}}">
									<span class="collapSub"></span>{{ $catalog->name }}
								</a>
								<div class="sub-menu">
									<!--GROUP-->
									<div class="all-sub">	
										@foreach($subcategories as $subcatalog)	
											@if($subcatalog->id_category==3)				
												<div class="sub-item">
													<a href="{{route('products',['id'=>$subcatalog->id])}}">
														<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
														<span>{{ $subcatalog->name }}</span>
													</a>
												</div>
											@endif
										@endforeach	
									</div>
									<!--/GROUP-->
								</div>
							</li>
						@endif
					@endforeach
						<li class="menu4"><a href="{{asset('about'.'.html')}}">About</a></li>
						<!--LOGIN/REGISTER-->
					<ul class="navbar-nav" id="navbar-nav">
						<!-- Authentication Links -->
						@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
						@endguest
					</ul>
					<!--/LOGIN/REGISTER-->
					<!--SHOPPING CART-->
					<span class="cart-icon">
						<a href="{{asset('cart/show')}}"><i class="fas fa-shopping-cart"></i><small>Cart</small></a>
						<a class="cart-number" href="{{asset('cart/show')}}"><span class="badge badge-pill badge-warning">{{ Cart::count() }}</span></a>
					</span>
					<!--SHOPPING CART-->
				</ul>
				

			</div>
			<!--/NAV-->
			<!--SUB-MENU-->
			<div class="sub-menu">
				<div class="sub-block" id="sub-block-st"><!--Women-->
					<div class="all-sub">	
						@foreach($subcategories as $subcatalog)	
							@if($subcatalog->id_category==1)		
								<div class="sub-item">							
									<a href="{{route('products',['id'=>$subcatalog->id])}}">
										<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
										<span>{{ $subcatalog->name }}</span>
									</a>
								</div>
							@endif
						@endforeach													
					</div>
				</div>

				<div class="sub-block" id="sub-block-nd"> <!--Men-->
					<div class="all-sub">		
						@foreach($subcategories as $subcatalog)	
							@if($subcatalog->id_category==2)					
								<div class="sub-item">
									<a href="{{route('products',['id'=>$subcatalog->id])}}">
										<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
										<span>{{ $subcatalog->name }}</span>
									</a>
								</div>
							@endif	
						@endforeach	
					</div>
				</div>

				<div class="sub-block" id="sub-block-rd"> <!--Kids-->
					<div class="all-sub">
						@foreach($subcategories as $subcatalog)	
							@if($subcatalog->id_category==3)
								<div class="sub-item">
									<a href="{{route('products',['id'=>$subcatalog->id])}}">
										<img src="{{ asset('local/storage/images/' . $subcatalog->image) }}">
										<span>{{ $subcatalog->name }}</span>
									</a>
								</div>
							@endif
						@endforeach	
					</div>
				</div>
			</div>
			<!--/SUB-MENU-->
		</div>
		<!--/NAVIGATION-->
	</div><!-- end of .top  -->
</section>                                                             
<!--/HEADER-->

