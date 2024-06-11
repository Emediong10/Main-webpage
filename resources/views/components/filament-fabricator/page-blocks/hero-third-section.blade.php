@aware(['page'])
@props([
'title',
'sub_title',
'image',
])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">

        <div class="m-0 section dark parallax" style="background-image: url('storage/{{ $image }}'); padding: 140px 0;"  data-bottom-top="background-position:0px 50px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix center">
                <div class="clearfix row">
                    <div class="col-lg-6">
                        <div class="mb-0 heading-block border-bottom-0">
                            <div class="before-heading text-lowercase ls1" style="color: #FFF; font-style: normal;">{{ $title }}</div>
                            <h3 class="nott font-secondary fw-normal" style="font-size: 32px;">{{ $sub_title }}</h3>
                            {{-- <a href="#block-modal-contact" class="button button-large button-circle button-border button-white button-light topmargin-sm ms-0">Get a Pet Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
