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
                        {!! $event->content !!}
                    </div>
                </div>
            </div>

        </div><!-- #posts end -->

        <div id="comments" class="post-block post-comments">

            <h3 class="text-color-dark text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5">Leave a Reply</h3>

            <form class="p-4 rounded bg-color-grey" action="/" method="POST">
                <div class="p-2">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label required mb-1 font-weight-bold text-dark">Full Name</label>
                            <input type="text" value="" data-msg-required="Please enter your name."
                                maxlength="100" class="form-control py-3 px-3 border-0 box-shadow-none" name="name"
                                id="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label required mb-1 font-weight-bold text-dark">Email Address</label>
                            <input type="email" value="" data-msg-required="Please enter your email address."
                                data-msg-email="Please enter a valid email address." maxlength="100"
                                class="form-control py-3 px-3 border-0 box-shadow-none" name="email" id="email"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label required mb-1 font-weight-bold text-dark">Comment</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                class="form-control p-3 border-0 box-shadow-none" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-0">
                            <button type="submit"
                                class="btn btn-secondary border-0 font-weight-bold text-3 btn-px-5 py-3"
                                data-loading-text="Loading..." data-cursor-effect-hover="plus"
                                data-cursor-effect-hover-color="light">
                                <span>Post Comment</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
    </div>
</section><!-- #content end -->
