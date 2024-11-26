@aware(['page'])
@props([
	'hero_image1',
	'hero_title1',
    'hero_sub_title1',
	'hero_image2',
	'hero_title2',
    'hero_sub_title2',
	'hero_image3',
	'hero_title3',
	'hero_reference',
    'hero_sub_title3',

	])
<!-- #Slider Starts -->
{{-- <section id="slider" class="slider-element swiper_wrapper" data-autoplay="6000" data-speed="800" data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">
    <div class="swiper-container swiper-parent">
		<div class="swiper-wrapper col-12">
			@foreach( $header as $item )
			<div class="swiper-slide dark">
					<div class="container">
					<div class="slider-caption @if(empty($layout)) slider-caption-left @elseif(!empty($layout)) @if($layout == 'left') slider-caption-left @elseif($layout == 'right') slider-caption-right @endif  @endif">
						<div class="margin-top">
								<h2 class="mt-5 text-white bottommargin-sm col-12">{{ $item['title'] }}</h2>
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
 </section> --}}
<!-- #Slider End -->

<section id="slider" class="h-auto slider-element revslider-wrap include-header">

    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
            <ul>	<!-- SLIDE  -->
                <li data-index="rs-2800" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('storage/'.$hero_image1)}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/'.$hero_image1)}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- BACKGROUND VIDEO LAYER -->
                    <div class="rs-background-video-layer"
                        data-forcerewind="on"
                        data-volume="mute"
                        data-videowidth="100%"
                        data-videoheight="100%"
                        {{-- data-videomp4="include/rs-plugin/demos/assets/videos/Dancing-Bulbs.mp4" --}}
                        data-videopreload="auto"
                        data-videoloop="loop"
                        data-forceCover="1"
                        data-aspectratio="16:9"
                        data-autoplay="true"
                        data-autoplayonlyfirsttime="false"
                    ></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-2800-layer-7"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-basealign="slide"
                        data-responsive_offset="off"
                        data-responsive="off"
                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"speed":5000,"to":"opacity:0;","ease":"Power4.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2800-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-130','-157']"
                                    data-fontsize="['130','130','100','80']"
                        data-lineheight="['130','130','100','80']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 6; white-space: nowrap; font-size: 130px; line-height: 130px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;border-width:0px;letter-spacing:-7px;">{{$hero_title1 }} </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                         id="slide-2800-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['16','16','-54','-89']"
                                    data-width="60"
                        data-height="3"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 7;background-color:rgba(38, 211, 105, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2800-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['65','65','-8','-32']"
                                    data-fontsize="['40','40','30','30']"
                        data-width="['640','640','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"

                        data-type="text"
                        data-typewriter='{"lines":"Rediscover%20the%20wonders%20that%20await%20you, Come%20back%20and%20explore%20the%20latest%20updates!,God%20bless%20you%20keep%20visiting.","enabled":"on","speed":"100","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 8; min-width: 640px; max-width: 640px; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Georgia, serif;font-style:italic;border-width:0px;">{{$hero_sub_title1 }}</div>


                </li>
                <!-- SLIDE  -->
                <li data-index="rs-2801" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('storage/'.$hero_image2)}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/'.$hero_image2)}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-2801-layer-7"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-basealign="slide"
                        data-responsive_offset="off"
                        data-responsive="off"
                        data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2801-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-130','-157']"
                                    data-fontsize="['130','130','100','80']"
                        data-lineheight="['130','130','100','80']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 13; white-space: nowrap; font-size: 130px; line-height: 130px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;background-color:rgba(0, 0, 0, 0);border-width:0px;letter-spacing:-7px;">{{ $hero_title2 }}</div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                         id="slide-2801-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['16','16','-54','-89']"
                                    data-width="60"
                        data-height="3"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 14;background-color:rgba(0, 220, 186, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2801-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['65','65','-8','-32']"
                                    data-fontsize="['40','40','30','30']"
                        data-width="['640','640','480','360']"
                        data-height="none"
                        data-whitespace="normal"

                        data-type="text"
                        data-typewriter='{"lines":"Your%20journey%20on%20our%20website%20awaits—come%20and%20experience%20it%20again!,Christ%20brings%20hope%20and%20love%20to%20everyone.,In%20Christ,%20we%20find%20strength%20and%20salvation.","enabled":"on","speed":"60","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 15; min-width: 640px; max-width: 640px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Georgia, serif;font-style:italic;border-width:0px;">{{ $hero_sub_title2 }} </div>

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-2802" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ asset('storage/'.$hero_image3)}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/'.$hero_image3)}}"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption tp-shape tp-shapewrapper "
                         id="slide-2802-layer-7"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full"
                        data-height="full"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-basealign="slide"
                        data-responsive_offset="off"
                        data-responsive="off"
                        data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 19;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2802-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-81','-171','-146']"
                                    data-fontsize="['100','100','70','60']"
                        data-lineheight="['100','100','70','50']"
                        data-width="['760','760','none','360']"
                        data-height="none"
                        data-whitespace="['normal','normal','nowrap','normal']"

                        data-type="text"
                        data-typewriter='{"lines":"","enabled":"on","speed":"80","delays":"1%7C100","looped":"off","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"off","hide_cursor":"on","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 20; min-width: 760px; max-width: 760px; white-space: normal; font-size: 100px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;border-width:0px;letter-spacing:-5px;">{{ $hero_title3 }}<br/> {{ $hero_sub_title3 }}  </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                         id="slide-2802-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['96','96','-35','-19']"
                                    data-width="60"
                        data-height="3"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":5000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 21;background-color:rgba(0, 220, 186, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption tp-resizeme"
                         id="slide-2802-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['144','144','12','18']"
                                    data-fontsize="['40','40','30','30']"
                        data-width="['640','640','480','360']"
                        data-height="none"
                        data-whitespace="normal"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":5000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 22; min-width: 640px; max-width: 640px; white-space: normal; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Georgia, serif;font-style:italic;border-width:0px;">{{$hero_reference}} </div>


                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

</section>
