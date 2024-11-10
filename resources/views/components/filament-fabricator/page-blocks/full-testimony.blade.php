@aware(['page'])
@props(['testimony'])
<section id="content">
    <div class="content-wrap">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Read this Testimony below</h1>

            </div>

        </section>
        <div class="container clearfix">



<div class="mt-6 row justify-content-center">
    <div class="col-lg-8">
        <div class="p-0 testimonial">
            {{-- <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="0" data-pagi="false" data-items="1"> --}}
                <div class="oc-item">

                    <div class="row g-0 flex-column align-items-center">
                        <div class="overflow-hidden col-12 d-flex align-self-stretch">
                            <img src="{{ asset('storage/' . $testimony->image) }}" class="rounded img-fluid" width="900" height="200" alt="Testimonial Image">
                        </div>
                        <div class="px-5 py-4 text-center col-12 testi-content">
                            <h3 class="mb-0">Name: {{$testimony->firstname}} {{$testimony->lastname}}</h3>
                            <h5 class="text-black-50 fw-normal"><span class="bold">Testimony Title: </span> {{ ucfirst($testimony->subject)}}</h5>
                            <div class="entry-content">
                                {!! Str::markdown($testimony->comment)!!}
                                {{-- {!! $testimony->comment !!} --}}
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>




