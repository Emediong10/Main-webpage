@aware(['page'])
@props(['title','sub_title','news','item_selection','display_option'])
{{-- <br><br> --}}
@if(!empty($news))
<section class="section" style="background-color:#ffffff !important">
    <div class="content-wrap">
        {{-- <div class="container"> --}}
            <div class="heading-block border-bottom-0 mb- text-center">
                <h3>{{ $title }}</h3>
                {{-- <span>{{ $sub_title }}</span> --}}
            </div>

            <div class="clear"></div>
            <div class="row mt-2">
                @if($display_option == 2)
                    @foreach($news as $content)
                        <div class="col-md-4 mb-5">
                            <div class="card course-card hover-effect border-0">
                                <a href="news/{{ $content->slug }}">
                                    <x-curator-glider
                                        class="card-img-top"
                                        :media="$content->image_id"
                                        height="307"
                                        width="356"
                                        style="object-fit: cover !important"
                                        alt="card img"
                                    />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title fw-bold mb-2">
                                        <a href="news/{{ $content->slug }}">{{ $content->title }}</a>
                                    </h4>
                                    <p class="mb-2 card-title-sub text-uppercase fw-normal ls-1">
                                        <a href="news/{{ $content->slug }}" class="text-black-50">
                                            {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $content->published_at)->format('M d Y') }}
                                        </a>
                                    </p>
                                    {{-- <p class="card-text text-black-50 mb-1">
                                        @if(Str::length($content->content) < 100)
                                            {!! $content->content !!}
                                        @else
                                            {{ substr($content->content, 0, 100) }}...
                                        @endif
                                    </p> --}}
                                </div>
                                <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif($display_option == 1)
                    @foreach($news as $content)
                        <div class="col-md-4 mb-5">
                            <div class="card course-card hover-effect border-0">
                                <a href="{{ $content['button_url'] }}">
                                    <img src="{{ asset('storage/'.$content['image']) }}" height="307" width="356" class="card-img-top" style="object-fit: cover !important" alt="card img">
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title fw-bold mb-2">
                                        <a href="{{ $content['button_url'] }}">{{ $content['title'] }}</a>
                                    </h4>
                                    <p class="card-text text-black-50 mb-1">
                                        @if(Str::length($content['description']) < 100)
                                            {{ $content['description'] }}
                                        @else
                                            {{ substr($content['description'], 0, 100) }}...
                                        @endif
                                    </p>
                                    <a href="{{ $content['button_url'] }}" class="text-capitalize">
                                        {{ $content['button_title'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if($display_option == 2)
                    <div class="text-center mb-3">
                        {{-- <a href="/news" class="btn btn-primary btn-lg">More News</a> --}}
                        <a href="/news" class="button button-large button-border button-rounded">More News</a>
                    </div>
                @endif
            </div>


        </div>
    </div>
</section>
@endif
