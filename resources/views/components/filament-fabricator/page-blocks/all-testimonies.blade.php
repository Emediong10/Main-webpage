@aware(['page'])
@props(['url_prefix', 'testimonies', 'news_pagination'])

<section class="section" style="background-color: #e9ecef !important;">
    <div class="container mw-md mt-lg-0">
        <div class="row g-4 align-items-end blog-cards">
            <div class="col-md-8">
                <div class="p-3 pb-4">
                    {{-- <div class="mb-4 overflow-hidden before-title text-border-right position-relative text-uppercase ls-3 text-smaller op-10 b-w-50">
                        !!
                    </div> --}}
                    <h3 class="mb-4 h2 font-secondary fw-bold lh-base">Read Testimonies Below</h3>
                    {{-- <p class="mb-5">THE King of Glory</p> --}}
                </div>

                <div class="row">
                    @foreach ($testimonies as $news_item)
                        <div class="col-sm-6">
                            <div class="card h-translate-y-sm transform-ts">
                                    <div class="p-4 card-body center">
                                    <div class="testi-image">
                                        <img src="{{ asset('storage/' . $news_item->image) }}" alt="{{ $news_item->image_alt }}">
                                    </div>
                                    <div class="p-4 card-body center">
                                        <h2 class="mb-4">
                                            {{ Illuminate\Support\Str::limit(strip_tags($news_item['subject']), 10, '...') }}
                                        </h2>
                                        <h4 class="inline">
                                            <strong>BY: {{ Illuminate\Support\Str::limit(strip_tags($news_item['firstname']), 10, '...') }}</strong>
                                        </h4>

                                        <h5 class="mb-3 h5 lh-base color">
                                            {{ \Carbon\Carbon::parse($news_item->created_at)->format('M d Y') }}
                                        </h5>
                                        <a href="{{ $url_prefix }}/{{ $news_item->slug }}">Read this Story
                                            <span class="mb-1 align-middle material-symbols-outlined">
                                                <i class="icon icon-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="center">
            <a href="/testimony-form" class="button button-large button-border button-rounded">Upload your Testimony</a>
        </div>
    </div>
</section>

{{-- Optional Section --}}

{{-- The code below is commented out but ready for future use.  --}}

{{--
<section id="content" style="background-color: rgb(191, 224, 182)">
    <div class="content-wrap">
        <div class="container clearfix">
            <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
                @foreach ($testimonies as $news_item)
                    <li class="grid-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="{{ $url_prefix }}/{{ $news_item->slug }}">
                                    <img src="{{ asset('storage/' . $news_item->image) }}" alt="{{ $news_item->image_alt }}">
                                </a>
                            </div>
                            <div class="testi-content">
                                <p>{{ Illuminate\Support\Str::limit($news_item['subject'], 40, '...') }}</p>
                                <div class="testi-meta">
                                    {{ $news_item->firstname }} {{ $news_item->lastname }}
                                    <a href="{{ $url_prefix }}/{{ $news_item->slug }}" class="button button-large button-border button-rounded text-end">Click here to read <i class="icon-circle-arrow-right"></i></a>
                                    <span><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($news_item->created_at)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="line"></div>
            <div class="center">
                <a href="/testimony-form" class="button button-large button-border button-rounded">Upload your Testimony</a>
            </div>
        </div>
    </div>
    <br>
</section>
--}}
