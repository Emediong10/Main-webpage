@aware(['page'])
@props(['payment_type'])
<section id="content">
    <div class="content-wrap">

        {{-- <section id="page-title">

            <div class="container clearfix">
                <h1>Read the {{ $event->title }} Event below</h1>

            </div>

        </section> --}}
        @php
        $progressPercentage = $payment_type->target_amount > 0 ? ($payment_type->amount_paid / $payment_type->target_amount) * 100 : 0;
    @endphp

        <div class="container clearfix">
            
            <!-- Posts
                ============================================= -->
                <div id="posts" class="row gutter-30">
                    
                    <div class="entry col-12">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <img  width="600" height="100" src="{{ asset('storage/' . $payment_type->image->path) }}" alt="{{ $payment_type->image->alt }}">
                            </div>
                            <div class="card bg-color-light rounded-0 my-4">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex justify-content-between">
                                        <div class="counter counter-inherit d-flex justify-content-between">
                                            <strong class="me-1 ls0">Donated:</strong>₦<span data-from="0" data-to="{{ $payment_type->amount_paid }}" data-refresh-interval="10" data-speed="1100" data-comma="true"></span>
                                        </div>
                                        <span><strong>Target:</strong>₦{{ number_format($payment_type->target_amount) }}</span>
                                    </div>
                                    <ul class="skills pt-3 mb-2">
                                        <li data-percent="{{ $progressPercentage }}">
                                            <div class="progress">
                                                <div class="progress-percent">
                                                    <div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $payment_type->amount_paid }}" data-refresh-interval="30" data-speed="1100"></span>%</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="entry-title">
                            <h2>{{ ucfirst($event->title) }}</h2>
                        </div> --}}

                       
                    </div>
                    <div class="entry-content entry-title">
                        <h2 class="center"><strong>{{ ucfirst($payment_type->title) }}</strong></h2>
                        {!! Str::markdown($payment_type->content)!!}
                    </div>
                </div>
            </div>

        </div><!-- #posts end -->


    </div>
    </div>
</section><!-- #content end -->
