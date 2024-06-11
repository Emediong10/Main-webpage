@aware(['page'])
@props([
   ' past_event',
     'past_event_image',
    'past_event_title',
    'past_event_type',
    'past_event_date',
    'past_event_details',

])

<style>
    .entry {
        margin-bottom: 20px; /* Adjust margin as needed */
    }
    .entry-image {
        width: 100%;
        height: 200px; /* Adjust height as needed */
        overflow: hidden;
    }
    .entry-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures the image covers the entire container */
    }
</style>

<section id="page-title" style="background-color: #28591a" class=" page-title-dark">

    <div class="container clearfix">
        <h1 class="center">PAST EVENTS</h1>

    </div>

</section>
<div class="container py-4">
    <div class="heading-block border-bottom-0 center">
        {{-- <div class="badge rounded-pill badge-default">Past and Current Events</div> --}}
        <h3 class="nott ls0">These are the past Events of ALIVE-Nigeria</h3>
    </div>
    <div class="clearfix mt-5 row">
        @foreach ($past_event as $past_item)
            <div class="col-md-4">
                <article class="entry">
                    <div class="mb-3 entry-image">
                        <a href="#"><img src="{{ url('storage', $past_item['past_event_image']) }}" alt="Image 3"></a>
                    </div>
                    <div class="entry-title">
                        <h3><a href="#">{{ $past_item['past_event_title'] }}</a></h3>
                    </div>
                    <div class="entry-meta">
                        <ul>
                            <li><i class="icon-line2-user"></i><a href="#"> {{ $past_item['past_event_type'] }}</a></li>
                            <li><i class="icon-calendar-times1"></i><a href="#"> {{ $past_item['past_event_date'] }}</a></li>
                        </ul>
                    </div>
                    <div class="clearfix entry-content">
                        <p>{!! Str::markdown($past_item['past_event_details'])!!}</p>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>





