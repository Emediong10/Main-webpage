@aware(['page'])
@props(['Main_title',
'policies',
'title',
'content'])


<div class="" style="padding: 100px 0; background-color:rgb(21, 87, 32);" data-0-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
    <div class="container">
        <div class="row justify-content-center dark topmargin">
            <div class="col-md-7">
                <h2 class="text-center text-white mb-5 mt-4 fw-semibold">{{ $Main_title }}</h2>


        @foreach ($policies as $item)

        <div class="toggle-wrap">
            <div class="toggle">
                <div class="toggle-header">
                    <div class="toggle-icon">
                        <i class="toggle-closed icon-angle-right1"></i>
                        <i class="toggle-open icon-angle-down1"></i>
                    </div>
                    <div class="toggle-title center">
                      <span style="font-size: bold">Q.</span> {{ $item['title'] }}
                    </div>
                </div>
                <div class="toggle-content center" style="background-color:rgb(217, 229, 219); color:rgb(13, 15, 13)" > {!! Str::markdown($item['content']) !!}</div>
            </div>

</div>
@endforeach
            </div>
        </div>
    </div>
</div>


