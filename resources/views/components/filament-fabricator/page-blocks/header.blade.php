@aware(['page'])	
@props([
	'header',
	'layout'
	])	
<!-- #Slider Starts -->
<section id="slider" class="slider-element swiper_wrapper" data-autoplay="6000" data-speed="800" data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">
    <div class="swiper-container swiper-parent">
		<div class="swiper-wrapper col-12">
			@foreach( $header as $item )
			<div class="swiper-slide dark">
					<div class="container">
					<div class="slider-caption @if(empty($layout)) slider-caption-left @elseif(!empty($layout)) @if($layout == 'left') slider-caption-left @elseif($layout == 'right') slider-caption-right @endif  @endif">
						<div class="margin-top">
								<h2 class="bottommargin-sm text-white mt-5 col-12">{{ $item['title'] }}</h2>
							<div class="h5 font-secondary">{{ $item['sub_title'] }}</div>
							</div>
					</div>
				</div>
				<div class="swiper-slide-bg" style="background-image: linear-gradient(to bottom, rgba(3, 3, 3, 0.212), rgba(0, 0, 0, 0.425)),url({{ asset('storage/'.$item['image']) }});"></div>
				</div>
			@endforeach
			</div>
		<div class="swiper-pagination"></div>
	</div>
 </section>
<!-- #Slider End -->	

