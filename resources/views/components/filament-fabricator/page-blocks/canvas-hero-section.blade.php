
@aware(['page'])
@props([
'title',
'detail',
'link',
'button_name',
'sub_title1',
'image1',
'reference1',
'sub_title2',
'image2',
'reference2',
'sub_title3',
'image3',
'reference3',
'sub_title4',
'image4',
'reference4',

])
<section id="content">
    <div class="clearfix pt-0 content-wrap">


        <div class="container clearfix topmargin">
            <div class="clearfix row">
                <div class="col-lg-6">
                    <div class="mb-0 heading-block border-bottom-0 topmargin-sm">
                        <h2 class="font-bold ls1 nott fw-normal">{{$title }}</h2>
                        <span>{{ $detail }}</span>
                        <a href="{{ $link }}" class="button button-large button-rounded topmargin-sm ms-0" style="background-color: #0d2706">{{ $button_name }}</a>
                        <div class="line line-sm"></div>
                    </div>
                    <div class="clearfix row">
                        <div class="col-md-4">
                            <div>
                                <div class="counter counter-small color"><span data-from="10" data-to="1136" data-refresh-interval="50" data-speed="1000"></span>+</div>
                                <h5 class="mt-0 color fw-semibold nott" style="font-size: 16px;">Colaborators</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <div class="counter counter-small" style="color: #22c1c3;"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span>+</div>
                                <h5 class="mt-0 fw-semibold nott" style="color: #22c1c3; font-size: 16px;">Graduates</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <div class="counter counter-small" style="color: #BD3F32;"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span>+</div>
                                <h5 class="mt-0 fw-semibold nott" style="color: #BD3F32; font-size: 16px;">Professionals</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget"
                        data-nav="false"
                        data-animate-in="slideInUp"
                        data-animate-out="slideOutUp"
                        data-autoplay="5000"
                        data-loop="true"
                        data-stage-padding="5"
                        data-margin="10"
                        data-items-xs="1"
                        data-items-sm="1"
                        data-items-md="1"
                        data-items-lg="1"
                        data-items-xl="1">

                        <div class="oc-item">
                            <div class="testimonial topmargin-sm">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('storage/'.$image1)}}" alt="Customer Testimonials"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{ $sub_title1 }}</p>
                                    <div class="testi-meta">
                                       {{ $reference1 }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial topmargin-sm">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('storage/'.$image2)}}" alt="Customer Testimonials"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{ $sub_title2 }}</p>
                                    <div class="testi-meta">
                                        {{ $reference2 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="testimonial topmargin-sm">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('storage/'.$image3)}}" alt="Customer Testimonials"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{ $sub_title3 }}</p>
                                    <div class="testi-meta">
                                       {{ $reference3 }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial topmargin-sm">
                                <div class="testi-image">
                                    <a href="#"><img src="{{ asset('storage/'.$image4)}}" alt="Customer Testimonials"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{ $sub_title4 }}</p>
                                    <div class="testi-meta">
                                       {{ $reference4 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
</section><!-- #content end -->
