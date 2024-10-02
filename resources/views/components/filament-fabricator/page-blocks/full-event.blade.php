@aware(['page'])
@props(['event'])


<section id="content">
    <div class="content-wrap">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Read the {{ $event->title }} news below</h1>

            </div>

        </section>
        <div class="container clearfix">


            <!-- Posts
                ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <img src="{{ asset('storage/' . $event->image->path) }}" alt="{{ $event->image->alt }}">
                        </div>
                        <div class="entry-title">
                            <h2>{{ ucfirst($event->title) }}</h2>
                        </div>

                        <ul>
                            <li>
                                <div class="entry-meta">
                                    <div id="event-countdown2" class="countdown"
                                        data-year="{{ \Carbon\Carbon::parse($event->end_date)->format('Y') }}"
                                        data-month="{{ \Carbon\Carbon::parse($event->end_date)->format('m') }}"
                                        data-day="{{ \Carbon\Carbon::parse($event->end_date)->format('d') }}">></div>
                                </div>
                            </li><br>
                            @if ($event->author != null)
                                <li><i class="icon-user"></i> By:{{ $event->author ? $event->author : 'Admin' }}</li>
                            @endif
                                <li><i class="icon-folder-open"></i><time>Time: <span>{{ $event->start_time }} -
                                            {{ $event->end_time }}</span> </time></li>
                                {{-- <li><i class="icon-folder-open"></i> <time></time></li> --}}
                                <li><i class="icon-comments"></i>Venue:{{ $event->venue }}</li>
                                {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                        </ul>
                    </div>
                    <div class="entry-content">
                        {!! Str::markdown($event->content)!!}
                    </div>
                </div>
            </div>

        </div><!-- #posts end -->


    </div>
    </div>
</section><!-- #content end -->
