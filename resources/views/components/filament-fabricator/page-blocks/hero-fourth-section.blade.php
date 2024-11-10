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
<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <div class="container clearfix topmargin-lg">
            <div class="mx-auto heading-block center border-bottom-0" style="max-width: 640px">
                <h3 class="nott font-secondary fw-normal" style="font-size: 36px;"><strong>{{ $title }}</strong></h3>
                <span>{{ $sub_title }}</span>
            </div>
            <div class="clearfix row contact-properties">

                @foreach ($donate as $item)

                <div class="col-md-4">
                    <a href="{{ $item['link'] }}" style="background: url('{{ asset('storage/' . $item['image1']) }}'); background-size:cover;">
                        <div class="vertical-middle dark center">
                            <div class="m-0 border-0 heading-block">
                                <h3 class="text-capitalize fw-normal font-secondary">{{ $item['title1'] }}</h3>
                                <span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
                                    {{ $item['sub_title1'] }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
