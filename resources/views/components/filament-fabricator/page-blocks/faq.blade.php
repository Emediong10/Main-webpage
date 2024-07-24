@aware(['page'])
@props([
    'Main_title',
    'faq',
    'title',
    'content'
    ])
<div class="" style="padding: 100px 0; background-color:rgb(21, 87, 32);" data-0-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
    <div class="container">
        <div class="row justify-content-center dark topmargin">
            <div class="col-md-7">
                <h2 class="text-center text-white mb-5 mt-4 fw-semibold"> {{ $Main_title }}</h2>


        @foreach ($faq as $item)

        <div class="toggle-wrap">
            <div class="toggle">
                <div class="toggle-header">
                    <div class="toggle-icon">
                        <i class="toggle-closed icon-angle-right1"></i>
                        <i class="toggle-open icon-angle-down1"></i>
                    </div>
                    <div class="toggle-title">
                      <span style="font-size: bold">Q.</span> {{ $item['title'] }}
                    </div>
                </div>
                <div class="toggle-content"> {{ $item['content'] }}</div>
            </div>

</div>
@endforeach
                <h5 class="mt-4 text-center fw-normal text-white-50 mb-0">Didn't find what you were after? <a href="#" class="text-white"><u>Visit the FAQ Page</u></a></h5>
            </div>
        </div>
    </div>
</div>
