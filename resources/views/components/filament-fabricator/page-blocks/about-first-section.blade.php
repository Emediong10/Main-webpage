@aware(['page'])

@props([
    'tab1_details',
    'tab1_title',
    'tab2_name',
    'tab2_title',
    'image',
    'tapping',
    'tab2_position',
    'tab3_title',
    'tab3_details',
    'tab4_title',
    'tab4_details',
])

<section id="page-title" style="background-color: #28591a" class=" page-title-dark">

    <div class="container clearfix">
        <h1 class="center">About ALIVE NIGERIA</h1>

    </div>

</section>
<br>
<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="tabs tabs-tb tabs-responsive" id="tab" data-accordion-style="accordion-bg">

                <ul class="tab-nav">
                    <li><a href="#tabs-1"> About ALIVE</a></li>
                    <li><a href="#tabs-2"> Meet Alive Officials</a></li>
                    <li><a href="#tabs-3"> ALIVE Nigeria Vision</a></li>
                    <li><a href="#tabs-4"> Why Join Us?</a></li>
                </ul>

                <div class="tab-container">
                    <div class="tab-content" id="tabs-1">
                        <blockquote class="quote">
                            <h1>{{ $tab1_title }}</h1>
                            <p> {!! Str::markdown($tab1_details) !!}</p>
                        </blockquote>
                        <div class="row">

                        </div>
                    </div>

                    <div class="tab-content" id="tabs-2">
                        <blockquote class="quote">
                            <p>{{ $tab2_title }}</p>
                        </blockquote>
                        <div class="row col-mb-50 mb-0">
                            @foreach ($tapping as $item)
                                <div id="oc-team" class="owl-carousel team-carousel carousel-widget" data-margin="30"
                                    data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2"
                                    data-items-lg="3" data-items-xl="4">
                                    <div class="team">
                                        <div class="team-image">
                                            <img src="{{ url('storage',$item['image']) }}" alt="ALIVE Nigeria">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-title">
                                                <h4>{{ $item['tab2_name'] }}</h4><span>{{ $item['tab2_position'] }}</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach

                        </div>
                    </div>



                    <div class="tab-content" id="tabs-3">
                        <div class="row col-mb-50">
                            <blockquote class="quote">
                                <h1>{{ $tab3_title }}</h1>
                                <p>{!! Str::markdown($tab3_details) !!} </p>
                            </blockquote>
                        </div>
                    </div>

                    <div class="tab-content" id="tabs-4">
                        <div class="row col-mb-50">
                            <blockquote class="quote">
                                <h1>{{ $tab4_title }}</h1>
                                <p> {!! Str::markdown($tab4_details) !!}</p>
                            </blockquote>
                        </div>
                    </div>




                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->
