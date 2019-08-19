<!--LOGO-->
<section class="logo" id="logo">
	<a href="{{ route('home') }}">
		<img src="{{ asset('img/logo.png') }}" alt="Cheetah Store">
	</a>
</section>
<!--LOGO-->

<!--HEADER-->
<section class="header" id="myHeader">
	<div class="top">
		<!--RIGHT-->
		<div class="right" id="right">
			<!--SEARCH-->
			<div class="search-box">
				<div id="search-bar"> 
					<form class="navbar-form" role='search' method='get' action='{{ asset('admin/search/') }}' >
						<div class="input-group">
							<div class="input-group-btn">
								<input type="text" class="form-control search-form-input" placeholder="Tìm kiếm..." name='result'>
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
			<!--LOGIN/REGISTER-->
			<ul class="navbar-nav" id="navbar-nav">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
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
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
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
			
			<!--NAV-->
			<div class="nav" id="nav"></div>
			<!--/NAV-->
		</div>
		<!--/NAVIGATION-->
	</div>
</section>                                                             
<!--/HEADER-->