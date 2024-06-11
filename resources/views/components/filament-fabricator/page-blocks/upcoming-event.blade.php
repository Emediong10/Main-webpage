@aware(['page'])
@props([
    'event',
    'past_event',
    'upcoming_title_program',
    'upcoming_subtitle',
    'start_date',
    'end_date',
    'upcoming_image',
    'start_time',
    'end_time',
    'upcoming_details',
])
  <section id="page-title" style="background-color: #28591a" class=" page-title-dark">

    <div class="container clearfix">
        <h1 class="center">ALIVE-NIGERIA UPCOMING EVENTS</h1>

    </div>

</section>
<br>
  <div class="heading-block border-bottom-0 center">
                <div class="badge rounded-pill badge-default">ALIVE Upcoming Events</div>
                <h3 class="nott ls0">These are the Upcoming Events we have for you all</h3>
            </div>

<div class="content-wrap">
    <div class="container">
        <div class="container py-4">



            @foreach ($event as $item)
            <div class="mb-5 row">
                <div class="col-lg-6">
                    <div class="mb-0 entry-image">
                        <a href="#"><img src="{{ url('storage', $item['upcoming_image']) }}" alt="ALIVE-Nigeria"></a>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top: 20px;">
                    <span class="before-heading">{{ $item['upcoming_title_program'] }}</span>
                    <div class="entry-title">
                        <h3><a href="#">{{ $item['upcoming_subtitle'] }}</a></h3>
                    </div>
                    <div class="entry-meta">
                        <ul>
                            <li><i class="icon-calendar3"></i> Start date: {{ $item['start_date'] }}</li>
                            <li><i class="icon-calendar3"></i> End date: {{ $item['end_date'] }}</li>
                            <li><i class="icon-folder-open"></i> Start Time: {{ $item['start_time'] }}</li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>{{ $item['upcoming_details'] }}</p>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            @endforeach


        </div>
    </div>
</div>
