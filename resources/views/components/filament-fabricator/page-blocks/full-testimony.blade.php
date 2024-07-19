@aware(['page'])
<section id="content">
    <div class="content-wrap">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Read the {{ $testimony->subject }} news below</h1>

            </div>

        </section>
        <div class="container clearfix">


            <!-- Posts
            ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                           <img src="{{ asset('storage/'.$testimony->image->path) }}" alt="{{$testimony->image->alt}}">
                        </div>
                        <div class="entry-title">
                            <h2>{{ ucfirst($testimony->title)}}</h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                {{-- <li><i class="icon-calendar3"></i>Start date:{{ $event->start_date }}</li>
                                <li><i class="icon-calendar3"></i>End date:{{ $event->end_date }}</li> --}}
                                <li><a href="#"><i class="icon-user"></i> Autor:{{$testimony->$fistname}} {{$testimony->$lastname}}</a></li>
                                {{-- <li><i class="icon-folder-open"></i><time>Time: <span>{{ $event->start_time }} - {{ $event->end_time }}</span> </time></li> --}}
                                {{-- <li><i class="icon-folder-open"></i> <time></time></li> --}}
                                {{-- <li><i class="icon-comments"></i>Venue:{{ $event->venue}}</li> --}}
                                {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                            </ul>
                        </div>
                        <div class="entry-content">
                            {!! $testimony->comment !!}
                        </div>
                    </div>
                </div>

</div><!-- #posts end -->
