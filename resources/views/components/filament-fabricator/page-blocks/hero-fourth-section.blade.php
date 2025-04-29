@aware(['page'])
@props([
    'title',
    'link',

    'sub_title',
    'title1',
    'donate',
    'sub_title1',
    'image1',

])
<div class="px-4 py-4 md:py-8" style="background-color:#D7F2C3 !important">
    <div class="mx-auto max-w-7xl">
        {{-- <div class="container clearfix topmargin-lg"> --}}
            <div class="mx-auto heading-block center border-bottom-0" style="max-width: 640px">
                <h3 class="nott font-secondary fw-normal" style="font-size: 36px;"><strong>{{ $title }}</strong></h3>
                <span>{{ $sub_title }}</span> <br>
<a href="/payment_type" class="button button-large button-border button-rounded">Go to Support page</a>
            </div>
            <div class="clearfix row contact-properties">



                 @foreach ($donate as $item)
                        <div class="col-lg-4 col-md-6 bottommargin-sm">
                            <div class="feature-box media-box fbox-bg">
                                <div class="fbox-media">
                                     <a href="{{ $item['link'] }}">
                                    <img style="height:auto;" width="500px" src="{{ asset('storage/'.$item['image1']) }}" alt="{{ $item['title1'] }}">
                                    </a>
                                </div>
                                <div class="border-0 fbox-content">
                                    <h3 class="nott ls0 fw-semibold center"> <strong>{{ $item['title1'] }}</strong>
                                        </h3>

                                        <div class="center" >
                                             <p style="color: rgb(96, 97, 97)">  {{ $item['sub_title1'] }}</p>
                                                <a href="{{ $item['link'] }}" class="button button-large button-border button-rounded">Go to support page</a>
                                        </div>





                                </div>
                            </div>
                        </div>


                    @endforeach



            </div>
        </div>
    </div>
</div>
