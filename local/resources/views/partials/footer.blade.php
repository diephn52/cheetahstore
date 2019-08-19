	<!--BOTTOM-->
	<div class="section bottom on-show" id="footer">
		<!--BOTTOM-COLS-->
		
		<div class="bottom-col">
			<div class="logo-bottom"><a href="{{ route('home') }}"></a></div>
			<!--NAV-->
			<div class="col">
				<h3>Women</h3>
				<ul>
					@foreach($subcategories as $subcategory)
						@if($subcategory->id_category==1)
							<li><a href="{{route('products',['id'=>$subcategory->id])}}">{{$subcategory->name}}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col">
				<h3>Men</h3>
				<ul>
					@foreach($subcategories as $subcategory)
						@if($subcategory->id_category==2)
							<li><a href="{{route('products',['id'=>$subcategory->id])}}">{{$subcategory->name}}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col">
				<h3>Kids</h3>
				<ul>
					@foreach($subcategories as $subcategory)
						@if($subcategory->id_category==3)
							<li><a href="{{route('products',['id'=>$subcategory->id])}}">{{$subcategory->name}}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
			<div class="col show-page">
				<h3><a class="" href="{{asset('about'.'.html')}}">About</a></h3>
			</div>
			<!--/NAV-->
			<!--SOCIALS-->
			<div class="col social">
				<ul>
					<li><a href="https://plus.google.com/" target="_blank" class="google">gp</a></li>
					<li><a href="https://www.facebook.com/converse.vietnam/" target="_blank" class="facebook">fb</a></li>
					<li><a href="https://www.youtube.com/" target="_blank" class="youtube">yt</a></li>
				</ul>
			</div>
			<!--SOCIALS-->
		</div>
		<!-- BOTTOM-COLS-->
		<div class="copyright"><p>2019  ©  <strong>Cheetah Store</strong>. All rights reserved.  <a href="#" target="_blank">DEVELOPED BY LMD</a></p></div>

		<div class="go-top" id="go-top" onclick="topFunction()"></div>
	</div> 
	<!--BOTTOM-->