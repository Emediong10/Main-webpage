@aware(['page'])

@props(['url_prefix', 'title', 'sub_title', 'payment_type'])

<section id="content" style="background-color: #D7F2C3 !important;" >
    <div class="py-0 content-wrap" style="overflow: visible">

        <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none"
            style="position: absolute; top: -58px; left:0; z-index: 1">
            <path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z" />
        </svg>

        <div class="container" style="background-color: #D7F2C3 !important;">

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




        <div class="mt-0 mb-4 bg-transparent section" style="background-color: #D7F2C3 !important;">
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

            <section id="content" style="background-color: #D7F2C3 !important;">

                <div class="content-wrap pb-0">
                    <div class="container mb-5">
                        {{-- <div class="p-3 pb-4">
                            <h1 class="mb-4 h2 font-secondary fw-bold lh-base">Read Testimonies Below</h1>
                        </div> --}}
                        <div class="post-grid row col-mb-30" >
                            @foreach ($payment_type as $item)
                                <div class="entry col-lg-4 col-md-6">
                                    <div class="grid-inner card">
                                        <div class="entry-image">
                                            <a href="{{ $url_prefix }}/{{ $item->slug }}">
                                                <x-curator-glider width="500" height="300" class="rounded"
                                                    :media="$item['image_id']"
                                                    style="width: 500px !important; height: 300px !important; border-radius: 10px !important;" />
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

                                                    <li><i class="icon-calendar3"></i> Target Amount:
                                                        ₦{{ number_format($item->target_amount) }}</li>
                                                    <li><i class="icon-user"></i> Donated: Amount
                                                        :{{ $item->amount_paid }}"</li>
                                                    {{-- <li><i class="icon-comments"></i>{{ $post->comments->count() }}</li> --}}

                                                </ul>
                                            </div>
                                            <div class="entry-content mt-4">
                                                <p class="mb-0">{!! \Illuminate\Support\Str::limit($item['content'], 70, '...') !!}
                                                    <a href="{{ $url_prefix }}/{{ $item->slug }}"
                                                        class="more-link">Read More</a>
                                                </p>
                                                <br>
                                                {{-- <a href="{{ route('getform', ['description' => $item->title]) }}"
                                                class="m-0 button button-rounded button-border nott ls0 fw-medium d-flex align-self-start"
                                                style="border-color: #4caf50 !important; color: #4caf50 !important;">
                                                Donate Now
                                            </a> --}}
                                                <div class="center" style="text-align: center; margin-top: 20px;">
                                                    <a href="{{ route('getform', ['description' => $item->title]) }}"
                                                        class="button button-large button-border button-rounded">
                                                        Donate Now
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </section>



        </div>



    </div>


    </div>


</section><!-- #content end -->
