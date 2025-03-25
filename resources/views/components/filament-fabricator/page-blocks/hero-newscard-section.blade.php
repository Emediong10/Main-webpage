@aware(['page'])
@props([
    'card_title',
    'main_header',
    'introductory_text',
    'items',
    'top_image',
    'bottom_card',
    'model',
    'data_source',
])
<section class="section" style="background-color:#e9ecef!important">
    <div class="container mw-md mt-lg-0">
        <div class="row g-4 align-items-end blog-cards">
            <div class="col-md-8">


                <div class="p-3 pb-4">
                    <div
                        class="mb-4 overflow-hidden before-title text-border-right position-relative text-uppercase ls-3 text-smaller op-10 b-w-50">
                        {!! $card_title !!}</div>
                    <h3 class="mb-4 h2 font-secondary fw-bold lh-base">{!! $main_header !!}</h3>
                    <p class="mb-5">{!! $introductory_text !!}</p>
                </div>

                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-sm-6 center">
                            <div class="card h-translate-y-sm transform-ts">
                                <x-curator-glider class="img-fluid card-img-top" :media="$item['image']" glide=""
                                    fallback="thumbnail" data-no-retina width="315" height="210"
                                    style="object-fit: cover;" />
                                <div class="p-4 card-body">
                                    <h5 class="mb-3 text-warning">
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item['time'])->format('M d Y') }}
                                    </h5>
                                    <h3 class="mb-3 h5 lh-base color"><a href="{{ $item['link'] }}"
                                            title="{{ $item['title'] }}">{{ Illuminate\Support\Str::limit($item['title'], 15, '...') }}</a>
                                    </h3>
                                    <p class="mb-4">{!! Illuminate\Support\Str::markdown(Illuminate\Support\Str::limit($item['content'], 35, '...')) !!}</p>
                                    <a href="{{ $item['link'] }}">Read More <span
                                            class="mb-1 align-middle material-symbols-outlined"><i
                                                class="icon icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="mb-4 card h-translate-y-sm transform-ts dark">
                            <x-curator-glider class="card-img" :media="$top_image['image']" glide="" fallback="thumbnail"
                                data-no-retina width="315" height="388" style="object-fit: cover;" />
                            <a href="{{ $top_image['link'] }}"
                                class="mb-5 card-img-overlay d-flex flex-column justify-content-end"
                                style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.3));">
                                <h5 class="mb-1 text-warning">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $top_image['time'])->format('M d, Y') }}
                                </h5>
                                <h3 class="mb-0 text-white h5 lh-base" title="{{ $top_image['title'] }}">
                                    {{ Illuminate\Support\Str::limit($top_image['title'], 20, '...') }}</h3>
                            </a>
                            <div class="mt-1 mb-3 text-center">
                                <a href="{{ $top_image['link'] }}" class="color">Read More <i
                                        class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="card h-translate-y-sm transform-ts">
                            <div class="p-4 card-body">
                                <h5 class="mb-3 text-warning">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $bottom_card['time'])->format('M d, Y') }}
                                </h5>
                                <h3 class="mb-3 h5 lh-base color"><a href="{{ $bottom_card['link'] }}"
                                        title="{{ $bottom_card['title'] }}">{{ Illuminate\Support\Str::limit($bottom_card['title'], 15, '...') }}</a>
                                </h3>
                                <p class="mb-4">{!! Illuminate\Support\Str::markdown(Illuminate\Support\Str::limit($bottom_card['content'], 35, '...')) !!}</p>
                                <a href="{{ $bottom_card['link'] }}">Read More <span
                                        class="mb-1 align-middle material-symbols-outlined"><i
                                            class="icon icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <br>
        @if ($data_source == 'db')
            <div class="mb-4 text-center">
                @if ($model == 'News')
                    <a href="/news" class="btn btn-primary btn-lg">More News</a>
                @elseif($model == 'Event')
                    <a href="/events" style="background-color: green" class="btn btn-success">More Events</a>
                @endif
            </div>
        @endif
    </div>
</section>
