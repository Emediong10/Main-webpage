@aware(['page'])

@props([
     'main_title',
    ' items',
     'title',
     'sub_title',
     'image',

  ])

<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <div class="clearfix m-0 section" style="background-color: #51575c;">
            {{-- <div class="container clearfix"> --}}

                <div class="mx-auto heading-block center border-bottom-0 bottommargin topmargin-sm" style="max-width: 640px">
                    {{-- <h3 class="nott font-secondary fw-normal" style="font-size: 36px;">About ALIVE</h3> --}}
                   <h2>{{ $main_title }} </span></h2>
                        {{-- <span>{{ $sub_title }}</span> --}}
                </div>

                {{-- <div class="clearfix row"> --}}
                    <!-- Features colomns
                    ============================================= -->
                    <div class="clearfix row">


                        @foreach ($items as $item)
                        <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                    <img style="height:auto;" width="500px" src="{{ asset('storage/'.$item['image']) }}" alt="{{ $item['title'] }}">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold center"> <strong>{{ $item['title'] }}</strong>
                                        </h3>

                                        <div >
                                             <p style="color: rgb(96, 97, 97)"> <strong> {{ $item['sub_title'] }}</strong></p>
                                        </div>


                                </div>
                            </div>
                        </div>
                    @endforeach



                    </div>
                </div>

        </div>
    </div>
</div>
</div>
