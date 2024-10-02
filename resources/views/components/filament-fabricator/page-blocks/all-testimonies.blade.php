@aware(['page'])
@props(['url_prefix','testimonies','news_pagination'])


<section id="page-title" style="background-color: rgb(191, 224, 182)">

    <div class="container clearfix" >
        <h1>read Testimonies below</h1>

    </div>

</section>


<section id="content" style="background-color: rgb(191, 224, 182)">
    <div class="content-wrap">
        <div class="container clearfix">

            <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
                @foreach($testimonies as $news_item)
                    <li class="grid-item">
                    <div class="testimonial">
                        <div class="testimonial topmargin-sm">
                            <div class="testi-image">
                            <a href="{{$url_prefix}}/{{$news_item->slug}}">
                                <img src="{{ asset('storage/' . $news_item->image) }}" alt="{{ $news_item->image_alt }}"></a>
                        </div>
                        </div>
                        <div class="testi-content">
                            <p>{{Illuminate\Support\Str::limit($news_item['subject'], 40, '...'); }}</p>
                            <div class="testi-meta">
                                {{ $news_item->firstname }} {{ $news_item->lastname }}


                            <a href="{{$url_prefix}}/{{$news_item->slug}}" class="button button-large button-border button-rounded text-end">Click here to read<i class="icon-circle-arrow-right"></i></a>

                                <span><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($news_item->created_at)->diffForHumans();}}</span>
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


