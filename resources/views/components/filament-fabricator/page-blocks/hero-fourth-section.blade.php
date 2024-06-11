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
])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        <div class="container clearfix topmargin-lg">
            <div class="mx-auto heading-block center border-bottom-0" style="max-width: 640px">
                <h3 class="nott font-secondary fw-normal" style="font-size: 36px;">{{ $title }}</h3>
                <span>{{ $sub_title }}</span>
            </div>
            <div class="clearfix row contact-properties">
                <div class="col-md-4">
                    <a href="https://www.paypal.com/donate?token=w5yl7xWSmmhMQIh4qE47oIQpKcY85tA5dt8dgD3OuXwZxQHtuAVY4xAgGs6XUdq0qA8lxKN6XckQuK1A" style="background: url('storage/{{ $image1}}'); background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="m-0 border-0 heading-block">
                                <h3 class="text-capitalize fw-normal font-secondary">{{ $title1 }}</h3>
                                <span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
                                    {{ $sub_title1 }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.paypal.com/donate?token=w5yl7xWSmmhMQIh4qE47oIQpKcY85tA5dt8dgD3OuXwZxQHtuAVY4xAgGs6XUdq0qA8lxKN6XckQuK1A" style="background: url('storage/{{ $image2 }}') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="m-0 border-0 heading-block">
                                <h3 class="text-capitalize fw-normal font-secondary">{{ $title2 }}</h3>
                                <span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
                                   {{ $title2 }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.paypal.com/donate?token=w5yl7xWSmmhMQIh4qE47oIQpKcY85tA5dt8dgD3OuXwZxQHtuAVY4xAgGs6XUdq0qA8lxKN6XckQuK1A" style="background: url('storage/{{ $image3 }}') no-repeat center center; background-size: cover;">
                        <div class="vertical-middle dark center">
                            <div class="m-0 border-0 heading-block">
                                <h3 class="text-capitalize fw-normal font-secondary">{{ $title3 }}</h3>
                                <span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
                                    {{ $sub_title3 }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
