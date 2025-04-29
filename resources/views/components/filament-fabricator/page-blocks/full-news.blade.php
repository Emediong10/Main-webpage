@aware(['page'])
@props(['news'])


<section id="content"  >
    <div class="content-wrap">

        <section>

            <div class="container clearfix">
                <h1>Read the {{ $news->title }} News below</h1>

            </div>

        </section>
        <div class="container clearfix">


            <!-- Posts
                ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <img
                            src="{{ asset('storage/' . $news->image->path) }}"
                            alt="{{ $news->image->alt }}"
                            width="500"
                            height="700"
                            style="height: 600px !important; object-fit: cover;">
                        </div>
                        <ul>

                                {{-- <div class="entry-meta">
                                    <li>
                                    <div id="news-countdown2" class="countdown"
                                        data-year="{{ \Carbon\Carbon::parse($news->end_date)->format('Y') }}"
                                        data-month="{{ \Carbon\Carbon::parse($news->end_date)->format('m') }}"
                                        data-day="{{ \Carbon\Carbon::parse($news->end_date)->format('d') }}"></div>
                                 </li>
                                </div> --}}
                           <br>


                            <div class="entry-meta">
								<ul>
									<li><i class="icon-calendar3"></i>{{ $news->created_at->diffForHumans() }} </li>
                                    @if ($news->author != null)
                                    <li><i class="icon-user"></i> By:{{ $news->author ? $news->author : 'Admin' }}</li>
                                     @endif
                                {{-- <li><i class="icon-comments"></i>{{ $news->comments->count()  }} Comments</li> --}}

								</ul>
							</div>

                        </ul>
                    </div>
                    <div class="entry-content entry-title">
                        <h2 class="center"><strong>{{ ucfirst($news->title) }}</strong></h2>
                        {!! Str::markdown($news->content)!!}
                    </div>
                    {{-- @livewire('news-comment', ['news' => $news]) --}}
                </div>

            </div>

        </div><!-- #posts end -->


    </div>
    </div>
</section>

