<!--SLIDER-->
<section class="slider-home show owl-carousel owl-theme container-fluid p-0" id="outer-carousel"> 
	@foreach($sliders as $slider)
		<div class="slide-item outer-carousel-item">
			<a href="#"><img src="{{ asset('local/storage/images/' . $slider->image) }}" alt="Slider"></a>
			
		</div>
	@endforeach
</section>
<!--/SLIDER-->