@aware(['page'])
@props(['url_prefix', 'events', 'news_pagination'])

@php
    $events = \App\Models\Event::where('active', 1)->get();
@endphp

@if ($events->isNotEmpty())
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

        <section class="section">
            <div class="content-wrap">
                <div class="container clearfix">

                    @php
                        $categories = [
                            1 => 'pf-illustrations',
                            2 => 'pf-uielements',
                            3 => 'pf-media',
                            4 => 'pf-graphics'
                        ];
                        $categoryLabels = [
                            1 => 'Mission Events',
                            2 => 'Retreat Events',
                            3 => 'MEC Events',
                            4 => 'Phone Evangelism'
                        ];
                        $filteredCategories = [];
                    @endphp

                    @foreach ($events as $event)
                        @if (isset($categories[$event->event_type_id]))
                            @php
                                $filteredCategories[$event->event_type_id] = $categoryLabels[$event->event_type_id];
                            @endphp
                        @endif
                    @endforeach

                    @if (!empty($filteredCategories))
                    <div class="grid-filter-wrap">
                        <ul class="grid-filter" data-container="#portfolio">
                            @foreach ($filteredCategories as $key => $label)
                                <li><a href="#" data-filter=".{{ $categories[$key] }}">{{ $label }}</a></li>
                            @endforeach
                        </ul>
                        <div class="rounded grid-shuffle" data-container="#portfolio">
                            <i class="icon-random"></i>
                        </div>
                    </div>
                    @endif

                    <div id="portfolio" class="portfolio row grid-container gutter-30">
                        @foreach ($events as $event)
                            @if (isset($categories[$event->event_type_id]))
                                <article class="portfolio-item col-md-4 col-sm-6 col-12 {{ $categories[$event->event_type_id] }}">
                                    <div class="grid-inner">
                                        <div class="portfolio-image">
                                            <a href="{{ $url_prefix }}/{{ $event->slug }}">
                                                <x-curator-glider width="500" height="200"
                                                    class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                    :media="$event['image_id']"
                                                    style="object-fit: cover !important; width: 450px; height: 200px;" />
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                    <a href="{{ $url_prefix }}/{{ $event->slug }}"
                                                        class="overlay-trigger-icon text-dark"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                                        data-lightbox="image" title="Image"><i
                                                            class="icon-line-plus"></i></a>
                                                    <a href="{{ $url_prefix }}/{{ $event->slug }}"
                                                        class="overlay-trigger-icon text-dark"
                                                        data-hover-animate="fadeInDownSmall"
                                                        data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                                            class="icon-line-ellipsis"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark text-dark" data-hover-animate="fadeIn"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc" style="background-color:rgb(219, 225, 231)">
                                            <h3 class="mb-3 h5 lh-base color center"><a
                                                    href="{{ $url_prefix }}/{{ $event->slug }}"><strong>{!! Str::limit($event['title'], 40, '...') !!}</strong></a>
                                            </h3>
                                            <p>{!! Illuminate\Support\Str::markdown(Illuminate\Support\Str::limit($event->content, 60, '...')) !!}</p>
                                            <span><i class="far fa-clock"></i>Event Posted:
                                                {{ \Carbon\Carbon::parse($event->created_at)->format('M d Y') }}</span>
                                            <span class="mt-2 d-block center"><a href="{{ $url_prefix }}/{{ $event->slug }}"
                                                    style="color: rgb(8, 61, 8)"
                                                    class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endif
