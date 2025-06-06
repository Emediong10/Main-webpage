@aware(['page'])
@props(['event'])


<section id="content">
    <div class="content-wrap">

        {{-- <section id="page-title"> --}}

            <div class="container clearfix">
                <h1>Read the {{ $event->title }} Event below</h1>

            </div>

        {{-- </section> --}}
        <div class="container clearfix">


            <!-- Posts
                ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <img
                            src="{{ asset('storage/' . $event->image->path) }}"
                            alt="{{ $event->image->alt }}"
                            width="500"
                            height="700"
                            style="height: 600px !important; object-fit: cover;">
                        </div>
                        <ul>

                                <div class="entry-meta">
                                    <li>
                                    <div id="event-countdown2" class="countdown"
                                        data-year="{{ \Carbon\Carbon::parse($event->end_date)->format('Y') }}"
                                        data-month="{{ \Carbon\Carbon::parse($event->end_date)->format('m') }}"
                                        data-day="{{ \Carbon\Carbon::parse($event->end_date)->format('d') }}"></div>
                                 </li>
                                </div>
                           <br>


                            <div class="entry-meta">
								<ul>
									<li><i class="icon-calendar3"></i>{{ $event->created_at->diffForHumans() }} </li>
                                    @if ($event->author != null)
                                    <li><i class="icon-user"></i> By:{{ $event->author ? $event->author : 'Admin' }}</li>
                                @endif
                                <li><i class="icon-comments"></i>{{ $event->comments->count()  }} Comments</li>

								</ul>
							</div>

                        </ul>
                    </div>
                    <div class="entry-content entry-title">
                        <h2 class="center"><strong>{{ ucfirst($event->title) }}</strong></h2>
                        {!! Str::markdown($event->content)!!}
                    </div>
                    @livewire('event-comment', ['event' => $event])
                </div>

            </div>

        </div><!-- #posts end -->


    </div>
    </div>
</section>
