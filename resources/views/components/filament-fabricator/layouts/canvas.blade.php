@props(['page','preview'])
<x-filament-fabricator.base.base :title="$page->title" :meta_description="$page->meta_description ? $page->meta_description: ($page->description?$page->description:null)" :seo_tags="$page->seo_tags">
    {{-- Header Here --}}

	@php
    \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::registerStyles([
        '<link rel="preconnect" href="https://fonts.googleapis.com">',
        '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
        '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">',
        '<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />',
       // ' <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">',
        '<link href="https://api.fontshare.com/v2/css?f[]=sentient@400,700,201,301,200,501,500,300,2,1,401,701&display=swap" rel="stylesheet">',
         asset('assets/css/bootstrap.css'),
        asset('assets/style.css'),
       // asset('assets/css/bootstrap-icons.css'),
        asset('assets/css/swiper.css'),
        asset('assets/css/dark.css'),
      asset('assets/css/slick.css'),
        asset('assets/css/font-icons.css'),
        asset('assets/css/animate.css'),
        asset('assets/css/magnific-popup.css'),
        asset('assets/css/custom.css'),
        asset('assets/demos/pet/pet.css'),
        asset('assets/demos/pet/css/fonts.css'),
        asset('assets/css/colors.php?color=f0a540'),
        asset('assets/include/rs-plugin/css/settings.css'),
        asset('assets/include/rs-plugin/css/layers.css'),
        asset('assets/demos/medical/css/medical-icons.css'),
        asset('assets/demos/medical/fonts.css'),
        asset('assets/demos/travel/travel.css'),
        asset('assets/demos/medical/medical.css'),
        asset('assets/css/components/bs-switches.css'),
        asset('assets/demos/seo/css/fonts.css'),
        asset('assets/css/colors.php?color=FE9603'),
        asset('assets/demos/landing/landing.css'),

        asset('assets/demos/seo/seo.css'),
        asset('assets/demos/landing/css/fonts.css'),
      //  asset('assets/css/components/datepicker.css'),
        asset('assets/css/components/bs-rating.css'),
        asset('assets/css/font-icons.css'),
      //  asset('assets/css/components/radio-checkbox.css'),
        asset('assets/css/colors.php?color=AC4147'),




    ]);
@endphp


	 @if(site_config('g-tag') == null)
      {!! site_config('g-tag') !!}
   @endif
    @if(isset($preview) && $preview==1)
    <x-filament-fabricator::page-blocks :blocks="$page->preview_blocks" />
    @else
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    @endif

    <!-- JavaScripts
	============================================= -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/Headroom.js')}}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.js')}}"></script>
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.js')}}"></script>
	<script src="{{ asset('assets/js/plugins.min.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>






   <!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/js/functions.js')}}"></script>


	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{asset ('assets/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{asset ('assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset ('assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset ('assets/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/moment.js') }}"></script>
   




	<!-- TYPEWRITER ADDON -->
    <script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/include/rs-plugin/demos/typewriter/js/revolution.addon.typewriter.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="assets/include/rs-plugin/demos/typewriter/css/typewriter.css">


    <script>
		var tpj=jQuery;
		var revapi1014;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_1014_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_1014_1");
			}else{
				revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
					sliderType:"standard",
					jsFileLocation: "include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:true,
							hide_under:768,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:20,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:20,
								v_offset:0
							}
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,600],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

			RsTypewriterAddOn(tpj, revapi1014);
		});

        /*ready*/
        var tpj=jQuery;
		var revapi100;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_100_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_100_1");
			}else{
				revapi100 = tpj("#rev_slider_100_1").show().revolution({
					sliderType:"hero",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
					},
					responsiveLevels:[1200,992,768,480,320],
					gridwidth:[1140,940,720,420,280],
					gridheight:[600,500,400,300,200],
					lazyType:"none",
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:2000,
						levels:[2,3,4,5,6,7,12,16,10,50],
					},
					fullScreenOffsetContainer:"header",
					shadow:0,
					spinner:"off",
					autoHeight:"off",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						disableFocusListener:false,
					}
				});
			}
		});
        const circleType = new CircleType(
			document.getElementById("rotated-text")
			).radius(80);

	</script>
    <script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			setTimeout( function(){
				$('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
			}, 1000 );
		});
	</script>
    <script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			setTimeout( function(){
				$('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
			}, 1000 );
		});
	</script>
	@section('scripts')
    @show

    {{-- Footer Here --}}




</x-filament-fabricator.base.base>
