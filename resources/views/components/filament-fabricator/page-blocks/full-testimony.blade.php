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



<div class="row justify-content-center mt-6">
    <div class="col-lg-8">
        <div class="testimonial p-0">
            {{-- <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="0" data-pagi="false" data-items="1"> --}}
                <div class="oc-item">

                    <div class="row g-0 flex-column align-items-center">
                        <div class="col-12 d-flex align-self-stretch overflow-hidden">
                            <img src="{{ asset('storage/' . $testimony->image) }}" class="rounded img-fluid" width="900" height="200" alt="Testimonial Image">
                        </div>
                        <div class="col-12 px-5 py-4 testi-content text-center">
                            <h3 class="mb-0">Name: {{$testimony->firstname}} {{$testimony->lastname}}</h3>
                            <h5 class="text-black-50 fw-normal"><span class="bold">Testimony Title: </span> {{ ucfirst($testimony->subject)}}</h5>
                            <div class="entry-content">
                                {!! $testimony->comment !!}
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>




