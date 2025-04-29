@aware(['page'])
@props(['url_prefix', 'testimonies', 'news_pagination'])



<section id="content" style="background-color: #D7F2C3 !important;">

    <div class="content-wrap pb-0">
        <div class="container mb-5">
            <div class="p-3 pb-4">
                <h1 class="mb-4 h2 font-secondary fw-bold lh-base">Read Testimonies Below</h1>
            </div>
            <div class="post-grid row col-mb-30">
                @foreach($testimonies as $news_item)
                <div class="entry col-lg-4 col-md-6">
                    <div class="grid-inner card">
                        <div class="entry-image">
                            <a href="{{ $url_prefix }}/{{ $news_item->slug }}">
                                <img src="{{ asset('storage/'. $news_item->image) }}" alt="{{ $news_item->image_alt }}" class="img-fluid" width="70" height="300" style="height:400px !important;" >
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="entry-title title-sm">
                                <h3 class="nott ls0 h5">
                                    {{ Illuminate\Support\Str::limit(strip_tags($news_item['subject']), 30, '...') }}
                                </h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> {{ \Carbon\Carbon::parse($news_item->created_at)->format('M d Y') }}</li>
                                    <li><i class="icon-user"></i> {{ $news_item['firstname']}} {{ $news_item['lastname']}}</li>

                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p class="mb-0">{!! \Illuminate\Support\Str::limit($news_item['comment'], 130, '...') !!}
                                    <a href="{{ $url_prefix }}/{{ $news_item->slug }}" class="more-link">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="center">
                <a href="/testimony-form" class="button button-large button-border button-rounded">Upload your Testimony</a>
            </div>
        </div>
        <div style="float: right; padding: 10px;">{!! $testimonies->appends(Illuminate\Support\Facades\Request::except('per_page'))->links() !!}
        </div>
        <div class="line"></div>
    </div>
</section>
