@aware(['page'])
@props(['url_prefix', 'events', 'news_pagination'])

<section id="content">
    <div class="content-wrap">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Check out our News and Events</h1>

            </div>

        </section>
        <div class="container mb-5">
            <div class="blog-posts posts-grid">
                <div class="row">



                </div>
            </div>
        </div>


        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="grid-filter-wrap">

                        <!-- Portfolio Filter
                ============================================= -->
                        <ul class="grid-filter" data-container="#portfolio">
                            {{-- <li class="activeFilter"><a href="#" data-filter=".pf-icons">Missions Events</a></li> --}}
                            {{-- <li><a href="#"  data-filter=".pf-icons">Missions</a></li> --}}
                            <li class="activeFilter"><a href="#" data-filter=".pf-illustrations">Mission Events</a></li>
                            <li><a href="#" data-filter=".pf-uielements">Retreat Events</a></li>
                            <li><a href="#" data-filter=".pf-media">MEC Events</a></li>
                            <li><a href="#" data-filter=".pf-graphics">phone Evangelism </a></li>
                        </ul><!-- .grid-filter end -->

                        <div class="rounded grid-shuffle" data-container="#portfolio">
                            <i class="icon-random"></i>
                        </div>

                    </div>

                    <!-- Portfolio Items
            ============================================= -->
                    <div id="portfolio" class="portfolio row grid-container gutter-30">

                        @foreach (\App\Models\Event::where('event_type_id', 1)->get()->all() as $news_item)
                            <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations"
                                style="color:rgb(209, 205, 205) ">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="">
                                            <x-curator-glider width="500" height="200"
                                                class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                :media="$news_item['image_id']"
                                                style="object-fit: cover !important; width: 45000px; height: 200px;" />
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{ $url_prefix }}/{{ $news_item->slug }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                                    data-lightbox="image" title="Image"><i
                                                        class="icon-line-plus"></i></a>
                                                <a href="{{ $url_prefix }}/{{ $news_item->slug }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc"  style="background-color:rgb(219, 225, 231)">
                                        <h3><a
                                                href="{{ $url_prefix }}/{{ $news_item->slug }}">{{ Str::limit($news_item['title'], 40, '...') }}</a>
                                        </h3>
                                        <p>{!! Illuminate\Support\Str::limit($news_item->content, 70, '...') !!}

                                        <span><i class="far fa-clock"></i>Event Posted:
                                            {{ \Carbon\Carbon::parse($news_item->created_at)->diffForHumans() }}</span>
                                        <div class="entry-overlay">
                                            <div id="event-countdown2" class="countdown"
                                                data-year="{{ \Carbon\Carbon::parse($news_item->end_date)->format('Y') }}"
                                                data-month="{{ \Carbon\Carbon::parse($news_item->end_date)->format('m') }}"
                                                data-day="{{ \Carbon\Carbon::parse($news_item->end_date)->format('d') }}">
                                                </div>
                                        </div>
                                        <span class="mt-2 d-block center"><a
                                            href="{{ $url_prefix }}/{{ $news_item->slug }}"
                                            style="color: rgb(8, 61, 8)"
                                            class="btn btn-xs btn-light text-1 text-uppercase">Read
                                            More</a></span>
                                    </p>

                                    </div>
                                </div>
                            </article>
                        @endforeach
                        {{-- @endif --}}

                        {{-- @if (\App\Models\Event::where('event_type_id', 2)->get()->all()) --}}
                        @foreach (\App\Models\Event::where('event_type_id', 2)->get() as $event_item)
                            <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="{{ $url_prefix }}/{{ $event_item->slug }}">
                                            <x-curator-glider width="500" height="200"
                                                class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                :media="$event_item['image_id']"
                                                style="object-fit: cover !important; width: 45000px; height: 200px;" />
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{ $url_prefix }}/{{ $event_item->slug }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                                    data-lightbox="image" title="Image"><i
                                                        class="icon-line-plus"></i></a>
                                                <a href="portfolio-single.html"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc" style="background-color:rgb(219, 225, 231) ">
                                        <h3><a
                                                href="{{ $url_prefix }}/{{ $event_item->slug }}">{{ Illuminate\Support\Str::limit($event_item['title'], 40, '...') }}</a>
                                        </h3>
                                        <p>{!! Illuminate\Support\Str::limit($event_item->content, 70, '...') !!}



                                        <span><i class="far fa-clock"></i>Event Posted:
                                            {{ \Carbon\Carbon::parse($event_item->created_at)->diffForHumans() }}</span>
                                        <div class="entry-overlay">
                                            <div id="event-countdown2" class="countdown"
                                                data-year="{{ \Carbon\Carbon::parse($event_item->end_date)->format('Y') }}"
                                                data-month="{{ \Carbon\Carbon::parse($event_item->end_date)->format('m') }}"
                                                data-day="{{ \Carbon\Carbon::parse($event_item->end_date)->format('d') }}">
                                                ></div>
                                        </div>
                                        <span class="mt-2 d-block center"><a
                                            href="{{ $url_prefix }}/{{ $event_item->slug }}"
                                            style="color: rgb(8, 61, 8)"
                                            class="btn btn-xs btn-light text-1 text-uppercase">Read
                                            More</a></span></p>

                                    </div>
                                </div>
                            </article>
                        @endforeach


                        @foreach (\App\Models\Event::where('event_type_id', 3)->get() as $event_item3)
                            <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="{{ $url_prefix }}/{{ $event_item3->slug }}">
                                            <x-curator-glider width="500" height="200"
                                                class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                :media="$event_item3['image_id']"
                                                style="object-fit: cover !important; width: 45000px; height: 200px;" />
                                        </a>

                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{ $url_prefix }}/{{ $event_item3->slug }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                                    data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                <a href="portfolio-single.html"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc"  style="background-color:rgb(219, 225, 231)">

                                        <h3><a
                                                href="">{{ Illuminate\Support\Str::limit($event_item3['title'], 40, '...') }}</a>
                                        </h3>
                                        <p>{!! Illuminate\Support\Str::limit($event_item3->content, 70, '...') !!}

                                        <span><i class="far fa-clock"></i>
                                            Event Posted:
                                            {{ \Carbon\Carbon::parse($event_item->created_at)->diffForHumans() }}
                                        </span>

                                        <div class="entry-overlay">
                                            <div id="event-countdown2" class="block countdown"
                                                data-year="{{ \Carbon\Carbon::parse($event_item->end_date)->format('Y') }}"
                                                data-month="{{ \Carbon\Carbon::parse($event_item->end_date)->format('m') }}"
                                                data-day="{{ \Carbon\Carbon::parse($event_item->end_date)->format('d') }}">
                                                </div>
                                        </div>
                                        <span class="mt-2 d-block center"><a
                                            href="{{ $url_prefix }}/{{ $event_item3->slug }}"
                                            style="color: rgb(8, 61, 8)"
                                            class="btn btn-xs btn-light text-1 text-uppercase">Read
                                            More</a></span>
                                    </p>
                                    </div>
                            </article>
                        @endforeach

                        @foreach (\App\Models\Event::where('event_type_id', 4)->get() as $event_item3)
                            <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <a href="{{ $url_prefix }}/{{ $event_item3->slug }}">
                                            <x-curator-glider width="500" height="200"
                                                class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                :media="$event_item3['image_id']"
                                                style="object-fit: cover !important; width: 45000px; height: 200px;" />
                                        </a>

                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{ $url_prefix }}/{{ $event_item3->slug }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                                    data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                <a href="portfolio-single.html"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall"
                                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                        class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc"  style="background-color:rgb(219, 225, 231)">

                                        <h3><a
                                                href="">{{ Illuminate\Support\Str::limit($event_item3['title'], 40, '...') }}</a>
                                        </h3>
                                        <p>{!! Illuminate\Support\Str::limit($event_item3->content, 70, '...') !!}
                                        <span><i class="far fa-clock"></i>Event Posted:
                                            {{ \Carbon\Carbon::parse($event_item->created_at)->diffForHumans() }}</span>

                                        <div class="entry-overlay">
                                            <div id="event-countdown2" class="countdown"
                                                data-year="{{ \Carbon\Carbon::parse($event_item->end_date)->format('Y') }}"
                                                data-month="{{ \Carbon\Carbon::parse($event_item->end_date)->format('m') }}"
                                                data-day="{{ \Carbon\Carbon::parse($event_item->end_date)->format('d') }}">
                                                </div>
                                        </div>
                                        <span class="mt-2 d-block center"><a
                                            href="{{ $url_prefix }}/{{ $event_item3->slug }}"
                                            style="color:rgb(8, 61, 8)"
                                            class="btn btn-xs btn-light text-1 text-uppercase">Read
                                            More</a></span>
                                        </p>
                                    </div>
                            </article>
                        @endforeach


                    </div><!-- #portfolio end -->

                </div>
            </div>
        </section><!-- #content end -->
