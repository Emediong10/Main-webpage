@aware(['page'])
@props(['testimony'])





<section id="content">
    <div class="content-wrap" style="background-color: #D7F2C3;">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Read about {{ $testimony->subject }}</h1>

            </div>

        </section>
        <div class="container clearfix">


            <!-- Posts
                            ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <img style="object-fit: cover;
  width: 1500px; height: 700px;"
                                src="{{ asset('storage/' . $testimony->image) }}" alt="{{ $testimony->name }}">
                        </div>




                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i>{{ $testimony->created_at->diffForHumans() }} </li>
                                <li><i class="icon-user"></i> <strong>{{ $testimony->firstname }}
                                        {{ $testimony->lastname }} </strong></li>
                                {{-- <li><i class="icon-comments"></i> {{ $testimony->comments->count() }} Comments</li> --}}

                            </ul>
                        </div>


                    </div>
                    <div class="entry-content entry-title">
                        <h2 class="center"><strong>{{ ucfirst($testimony->subject) }}</strong></h2>
                        {!! Str::markdown($testimony->comment) !!}
                    </div>
                    {{-- @livewire('blog-comment', ['blog' => $blog]) --}}

                </div>
            </div>

        </div><!-- #posts end -->

    </div>
    </div>
</section>
