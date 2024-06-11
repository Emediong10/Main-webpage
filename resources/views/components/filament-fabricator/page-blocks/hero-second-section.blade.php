@aware(['page'])

@props([
     'title',
     'sub_title',
     'title1',
     'sub_title1',
     'image1',
     'title2',
     'sub_title2',
     'image2',
     'title3',
     'sub_title3',
     'image3',
     'title4',
     'sub_title4',
     'image4'
  ])

<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <div class="clearfix m-0 section" style="background-color: #eef2f5;">
            <div class="container clearfix">

                <div class="mx-auto heading-block center border-bottom-0 bottommargin topmargin-sm" style="max-width: 640px">
                    {{-- <h3 class="nott font-secondary fw-normal" style="font-size: 36px;">About ALIVE</h3> --}}
                   <h2>{{ $title }} </span></h2>
                        <span>{{ $sub_title }}</span>
                </div>

                <div class="clearfix row">
                    <!-- Features colomns
                    ============================================= -->
                    <div class="clearfix row">
                        <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                    <img src="{{ asset('storage/'.$image1)}}" alt="{{ $title }}">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold">{{ $title1 }}<span class="subtitle fw-light ls0">{{ $sub_title1 }}</span></h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                    <img src="{{ asset('storage/'.$image2)}}" alt="Featured Box Image">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold">{{ $title2 }}<span class="subtitle fw-light ls0">{{ $sub_title2 }}

                                        </span></h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                    <img src="{{ asset('storage/'.$image3)}}" alt="Featured Box Image">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold">{{ $title3 }}<span class="subtitle fw-light ls0">{{ $sub_title3 }}</span></h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                   <img src="{{ asset('storage/'.$image4)}}" alt="Featured Box Image">
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold">{{ $title4 }}<span class="subtitle fw-light ls0">{{ $sub_title4 }}</span></h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
