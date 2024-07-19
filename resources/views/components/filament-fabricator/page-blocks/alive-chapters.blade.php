@aware(['page'])
@props([
'slider_image',
'header_title',
'header_slider_image',
'header_subtitle',
'why_alive_image',
'why_alive_title',
'why_alive_subtitle',
'eastern_chapter_image1',
'eastern_chapter_name1',
'eastern_chapter_subtitle1',
'eastern_chapter_image2',
'eastern_chapter_name2',
'eastern_chapter_subtitle2',
'eastern_chapter_image3',
'eastern_chapter_name3',
'eastern_chapter_subtitle3',
'eastern_chapter_image4',
'eastern_chapter_name4',
'eastern_chapter_subtitle4',
'western_chapter_image1',
'western_chapter_name1',
'western_chapter_subtitle1',
'western_chapter_image2',
'western_chapter_name2',
'western_chapter_subtitle2',
'western_chapter_image3',
'western_chapter_name3',
'western_chapter_subtitle3',
'western_chapter_image4',
'western_chapter_name4',
'western_chapter_subtitle4',
'western_chapter_image5',
'western_chapter_name5',
'western_chapter_subtitle5',
'northern_chapter_image1',
'northern_chapter_name1',
'northern_chapter_subtitle1',
'northern_chapter_image2',
'northern_chapter_name2',
'northern_chapter_subtitle2',
'northern_chapter_image3',
'northern_chapter_name3',
'northern_chapter_subtitle3',

])

            <section id="page-title" style="background-color: #28591a" class=" page-title-dark">

                <div class="container clearfix">
                    <h1 class="center">ALIVE-NIGERIA CHAPTERS</h1>

                </div>

            </section>
            <br>

            <div class="mb-0 row col-mb-80">
                <div class="col-12">
                    <div class="heading-block center border-bottom-0">
                        <h2>{{ $header_title }}</h2>
                        <span>{{ $header_subtitle }}</span>
                    </div>
                    <div class="fslider" data-pagi="false" data-animation="fade">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                @foreach ($slider_image as $item)
                                <div class="slide">
                                    <img class="slider-image" src="{{ url('storage', $item['header_slider_image']) }}" alt="header_slider_image">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section id="content">
                <div class="content-wrap">
                    <div class="container mw-md">

                        <div class="tabs block-tab-2 tabs-alt tabs-responsive tabs-justify" id="tab">
                            <ul class="tab-nav">
                                <li><a href="#tabs-1"><i class="icon-line2-key"></i>Why ALIVE Chapters</a></li>
                                <li><a href="#tabs-2"><i class="icon-line2-social-dropbox"></i>EASTERN NIGERIA ZONE</a></li>
                                <li><a href="#tabs-3"><i class="icon-line2-drop"></i>WESTERN NIGERIAN ZONE</a></li>
                                <li><a href="#tabs-4"><i class="icon-line2-pointer"></i>NORTHERN NIGERIAN ZONE</a></li>
                            </ul>

                            <div class="mt-4 tab-container">

                                <div class="tab-content" id="tabs-1">
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$why_alive_image)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $why_alive_title }}</h3>
                                            <p>{{ $why_alive_subtitle }}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tabs-2">
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$eastern_chapter_image1)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $eastern_chapter_name1 }}</h3>
                                            <p>{{ $eastern_chapter_subtitle1 }}</p>

                                        </div>
                                    </div>
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$eastern_chapter_image2)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $eastern_chapter_name2 }}</h3>
                                            <p>{{$eastern_chapter_subtitle2 }}</p>

                                        </div>
                                    </div>
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$eastern_chapter_image3)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $eastern_chapter_name3 }}</h3>
                                            <p>{{$eastern_chapter_subtitle3 }}</p>

                                        </div>
                                    </div>
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$eastern_chapter_image4)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $eastern_chapter_name4 }}</h3>
                                            <p>{{$eastern_chapter_subtitle4 }}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tabs-3">
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$western_chapter_image1)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $western_chapter_name1 }}</h3>
                                            <p>{{ $western_chapter_subtitle1 }}</p>

                                        </div>
                                    </div>
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$western_chapter_image2)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $western_chapter_name2 }}</h3>
                                            <p>{{ $western_chapter_subtitle2 }}</p>

                                        </div>
                                    </div>
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$western_chapter_image3)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $western_chapter_name3 }}</h3>
                                            <p>{{ $western_chapter_subtitle3 }}</p>

                                        </div>
                                    </div>
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$western_chapter_image4)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $western_chapter_name4 }}</h3>
                                            <p>{{ $western_chapter_subtitle4 }}</p>

                                        </div>
                                    </div>
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$western_chapter_image5)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $western_chapter_name5 }}</h3>
                                            <p>{{ $western_chapter_subtitle5 }}</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tabs-4">
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$northern_chapter_image1)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $northern_chapter_name1 }}</h3>
                                            <p> {{ $northern_chapter_subtitle1 }} </p>

                                        </div>
                                    </div>
                                    <div class="row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$northern_chapter_image2)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $northern_chapter_name2 }}</h3>
                                            <p>{{ $northern_chapter_subtitle2 }}</p>

                                        </div>
                                    </div>
                                    <div class="flex-row-reverse row col-mb-30 align-items-center">
                                        <div class="col-md-7">
                                            <img src="{{ asset('storage/'.$northern_chapter_image3)}}" alt="story-image">
                                        </div>
                                        <div class="col-md-5">
                                            <h3>{{ $northern_chapter_name3 }}</h3>
                                            <p>{{ $northern_chapter_subtitle3 }}</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- #content end -->

            <style>
                /* ----- Tab ----- */
                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) {
                    border-bottom: none;
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li {
                    float: left;
                    border: 0;
                    height: auto;
                    text-align: center;
                }

                .block-tab-2.tabs.tabs-alt ul.tab-nav li.ui-tabs-active a {
                    border: 0;
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li a {
                    height: auto;
                    line-height: 1;
                    background-color: transparent;
                    font-size: 15px;
                    font-weight: 400;
                    padding: 0 0 20px 0;
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li a i {
                    display: block;
                    font-size: 42px;
                    margin: 0 0 17px 0;
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li.ui-tabs-active a {
                    top: 0;
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li.ui-tabs-active i {
                    color: var(--danger, #dc3545);
                }

                .block-tab-2 ul.tab-nav:not(.tab-nav-lg) li.ui-tabs-active a::after {
                    content: '';
                    position: absolute;
                    width: 6px;
                    height: 6px;
                    bottom: 0;
                    left: 50%;
                    margin-left: -3px;
                    border-radius: 50%;
                    background: var(--danger, #dc3545);
                }

    @media (max-width: 768px) {
    .slider-image {
        width: 100px;  /* Set the width to 30px */
        height: 500px; /* Set the height to 20px */
    }
}


                </style>
