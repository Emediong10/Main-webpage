@aware(['page'])
@props(['url_prefix','events','news_pagination'])

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
           @foreach($events as $news_item)
          <div class="post post-grid col-md-6 col-lg-4">
              <div class="grid-box">
                <div class="post-image">
                   <div class="">
                       <a href="{{$url_prefix}}/{{$news_item->slug}}">
                           <x-curator-glider
                               class="img-responsive img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                               :media="$news_item['image_id']"
                               style="object-fit:cover !important"
                           />
                          </a>
                  </div>
                   <div class="post-content">
                     <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{$url_prefix}}/{{$news_item->slug}}"> {{Illuminate\Support\Str::limit($news_item['title'], 40, '...'); }}</a></h2>
                     <p>{!!Illuminate\Support\Str::limit($news_item->content, 70, '...'); !!}</p>
                     <div class="post-meta">
                        <span><i class="far fa-user"></i> By <a href="#">{{$news_item->author}}</a> </span>
                        <span><i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($news_item->created_at)->diffForHumans();}}</span>
                        <span class="d-block mt-2"><a href="{{$url_prefix}}/{{$news_item->slug}}" style="color: rgb(8, 61, 8)" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                    </div>
                </div>
                </div>
            </div>
          </div>
          @endforeach
    </div>
</div>
</div>
