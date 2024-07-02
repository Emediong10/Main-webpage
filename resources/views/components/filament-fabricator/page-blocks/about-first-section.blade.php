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
                            <p class="justify-center" style="font-weight: bold;">{{ $tab2_title }}</p>
                        </blockquote>
                        <div class="mb-0 row col-mb-50 horizontal-list">
                            @foreach ($tapping as $item)
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{{ url('storage', $item['image']) }}" alt="ALIVE Nigeria">
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title">
                                            <h4>{{ $item['tab2_name'] }}</h4>
                                            <span>{{ $item['tab2_position'] }}</span>
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

<style>
.horizontal-list {
    display: flex;
    flex-wrap: wrap;
    gap: 30px; /* Adjust the gap between items as needed */
}

.team {
    flex: 1 1 calc(25% - 30px); /* 4 items per row */
    max-width: calc(25% - 30px);
    box-sizing: border-box;
}

.team-image img {
    max-width: 100%;
}

.team-desc {
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
    .team {
        flex: 1 1 calc(33.33% - 30px); /* 3 items per row */
        max-width: calc(33.33% - 30px);
    }
}

@media (max-width: 992px) {
    .team {
        flex: 1 1 calc(50% - 30px); /* 2 items per row */
        max-width: calc(50% - 30px);
    }
}

@media (max-width: 768px) {
    .team {
        flex: 1 1 100%; /* 1 item per row */
        max-width: 100%;
    }
}


</style>
