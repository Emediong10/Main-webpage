@aware(['page'])

@props(['url_prefix', 'title', 'sub_title', 'payment_type'])
<section id="content">
    <div class="py-0 content-wrap" style="overflow: visible">

        <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none"
            style="position: absolute; top: -58px; left:0; z-index: 1">
            <path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z" />
        </svg>

        <div class="container">

            <div class="slider-feature w-100">
                <div class="row justify-content-center">
                    <div class="px-1 col-md-3">
                        <a href="/events"
                            class="py-3 shadow card center border-start-0 border-end-0 border-top-0 border-bottom rounded-0 fw-semibold text-uppercase ls1">
                            <div class="card-body">
                                <i class="icon-line-align-center"></i>View Our Mission
                            </div>
                        </a>
                    </div>
                    <div class="px-1 col-md-3">
                        <a href="#"
                            class="py-3 shadow card center border-start-0 border-end-0 border-top-0 border-bottom rounded-0 fw-semibold text-uppercase ls1">
                            <div class="card-body">
                                <i class="icon-line-umbrella"></i>About ALIVE
                            </div>
                        </a>
                    </div>
                    <div class="px-1 col-md-3">
                        <a href="#"
                            class="py-3 shadow card center border-start-0 border-end-0 border-top-0 border-bottom rounded-0 fw-semibold text-uppercase ls1">
                            <div class="card-body">
                                <i class="icon-line-mail"></i>Testimonies
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>




        <div class="mt-0 mb-4 bg-transparent section">
            <div class="container clearfix">
                <div class="row justify-content-center" style="margin-top: 100px">
                    <div class="col-md-7 center">
                        <div class="mb-4 heading-block border-bottom-0">
                            <h2 class="mb-4 nott">{{ $title }}</h2>
                        </div>

                        <p>{{ $sub_title }}</p>
                    </div>
                </div>
            </div>

            <section id="content">

                <div class="content-wrap pb-0">
                    <div class="container mb-5">
                        {{-- <div class="p-3 pb-4">
                            <h1 class="mb-4 h2 font-secondary fw-bold lh-base">Read Testimonies Below</h1>
                        </div> --}}
                        <div class="post-grid row col-mb-30">
                            @foreach ($payment_type as $item)
                            <div class="entry col-lg-4 col-md-6">
                                <div class="grid-inner card">
                                    <div class="entry-image">
                                        <a href="{{ $url_prefix }}/{{ $item->slug }}">
                                            <x-curator-glider
                                                width="500"
                                                height="300"
                                                class="rounded"
                                                :media="$item['image_id']"
                                                style="width: 500px !important; height: 300px !important; border-radius: 10px !important;"
                                            />
                                        </a>
                                    </div>

                                    <div class="p-4">
                                        <div class="entry-title title-sm">
                                            <h3 class="nott ls0 h5">
                                                {{-- <a href="{{ $url_prefix }}/{{ $news_item->slug }}">{{ $post['title'] }}</a> --}}
                                                {{ Illuminate\Support\Str::limit(strip_tags($item['subject']), 30, '...') }}
                                            </h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>

                                                <li><i class="icon-calendar3"></i> Target Amount: ₦{{ number_format($item->target_amount) }}</li>
                                                <li><i class="icon-user"></i> Donated: Amount :{{ $item->amount_paid }}"</li>
                                                {{-- <li><i class="icon-comments"></i>{{ $post->comments->count() }}</li> --}}

                                            </ul>
                                        </div>
                                        <div class="entry-content mt-4">
                                            <p class="mb-0">{!! \Illuminate\Support\Str::limit($item['content'], 130, '...') !!}
                                                <a href="{{ $url_prefix }}/{{ $item->slug }}" class="more-link">Read More</a>
                                            </p>
                                            <br>
                                            <a href="{{ route('getform', ['description' => $item->title]) }}"
                                                class="m-0 button button-rounded button-border nott ls0 fw-medium d-flex align-self-start"
                                                style="border-color: #4caf50 !important; color: #4caf50 !important;">
                                                Donate Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- <div class="center">
                            <a href="/testimony-form" class="button button-large button-border button-rounded">Upload your Testimony</a>
                        </div> --}}
                    </div>
                    <div class="line"></div>
                </div>
            </section>











            {{-- <div class="owl-carousel owl-carousel-full image-carousel carousel-widget topmargin-sm charity-card"
                data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
                data-autoplay="50000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
                data-items-md="2" data-items-lg="2" data-items-xl="2">


                @foreach ($payment_type as $item)
                    @php
                        $progressPercentage =
                            $item->target_amount > 0 ? ($item->amount_paid / $item->target_amount) * 100 : 0;
                    @endphp
                    <div class="oc-item text-start ">


                        <a href="">
                            <x-curator-glider width="1000" height="500" class="rounded" :media="$item['image_id']"
                                style="border-radius: 10px !important;" />
                        </a>

                        <!-- Content -->

                        <div class="card-body">
                            <div class="p-4 shadow-lg oc-desc d-flex flex-column justify-content-center"
                                style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important;">



                                <!-- Title -->
                                <h3 class="mb-3">
                                    <a href="{{ $url_prefix }}/{{ $item->slug }}"
                                        style="text-decoration: none !important; color: #000 !important;">
                                        <strong>{{ $item->title }}</strong>
                                    </a>
                                </h3>

                                <h6>Target Amount: ₦{{ number_format($item->target_amount) }}</h6>

                                <div class="my-4 card bg-color-light rounded-0">
                                    <div class="px-5 py-4 card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="counter counter-inherit d-flex justify-content-between">
                                                <strong>Donated:</strong>₦<span data-from="1"
                                                    data-to="{{ $item->amount_paid }}" data-refresh-interval="10"
                                                    data-speed="1100" data-comma="true"></span>

                                            </div>

                                        </div>
                                        <ul class="pt-3 mb-2 skills">
                                            <li data-percent="{{ $progressPercentage }}">
                                                <div class="progress">
                                                    <div class="progress-percent">
                                                        <div class="counter counter-inherit counter-instant"><span
                                                                data-from="0" data-to="" data-refresh-interval="30"
                                                                data-speed="100">10</span></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mt-0 entry-content">
                                    <!-- Description -->
                                    <p class="mb-4 text-black-50">{!! Illuminate\Support\Str::markdown(\Illuminate\Support\Str::limit($item->content, 150, '...')) !!}<a
                                            href="{{ $url_prefix }}/{{ $item->slug }}">Read more</a></p>
                                </div>
                                <!-- Donate Button -->
                                <a href="{{ route('getform', ['description' => $item->title]) }}"
                                    class="m-0 button button-rounded button-border nott ls0 fw-medium d-flex align-self-start"
                                    style="border-color: #4caf50 !important; color: #4caf50 !important;">
                                    Donate Now
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div> --}}

        </div>



    </div>


    </div>

    {{-- <style>
        span[data-from="0"] {
            visibility: hidden;
        }

        span[data-from="0"].updated {
            visibility: visible;
        }
    </style> --}}


    {{-- <script>
        jQuery(document).ready(function($) {
            var elementParent = $('.floating-contact-wrap');
            $('.floating-contact-btn, .btn-contact').off('click').on('click', function(e) {
                elementParent.toggleClass('active', );
                e.preventDefault(e);
            });
        });

        var cal = $('#calendar').calendario({
                onDayClick: function($el, $contentEl, dateProperties) {

                    for (var key in dateProperties) {
                        console.log(key + ' = ' + dateProperties[key]);
                    }

                },
                caldata: canvasEvents
            }),
            $month = $('#calendar-month').html(cal.getMonthName()),
            $year = $('#calendar-year').html(cal.getYear());

        $('#calendar-next').on('click', function() {
            cal.gotoNextMonth(updateMonthYear);
        });
        $('#calendar-prev').on('click', function() {
            cal.gotoPreviousMonth(updateMonthYear);
        });
        $('#calendar-current').on('click', function() {
            cal.gotoNow(updateMonthYear);
        });

        function updateMonthYear() {
            $month.html(cal.getMonthName());
            $year.html(cal.getYear());
        };
    </script> --}}
</section><!-- #content end -->



