@aware(['page'])
@props([
'affiliate_name',
'main_image',
'affiliate_link',
'affiliate',
'big_image',
'affiliate_title'


])
<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">

        <section id="content">
			<div class="content-wrap min-vh-100 d-flex align-items-center">
				<div class="container clearfix">

					<div class="row block-card-9 col-mb-50">

                @foreach($affiliate as $item)

                    <div class="col-lg-4 min-vh-75">
                        <div class="grid-inner rounded-3 h-100">
                            <div class="grid-image lazy" data-bg="{{ url('storage', $item['big_image']) }}"></div>
                            <div class="bg-overlay">
                                <div class="p-5 bg-overlay-content flex-column justify-content-between align-items-start dark">
                                    <div class="grid-icon">
                                        <img src="{{ url('storage', $item['main_image']) }}" alt="Image" width="60">
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="mb-2 text-uppercase fw-medium font-body ls1 text-smaller op-07">{{ $item['affiliate_name'] }}</h5>
                                        <h3 class="fw-medium h2">{{ $item['affiliate_title'] }}</h3>
                                        <a href="{{ $item['affiliate_link'] }}" class="mb-0 text-center bg-white icon-stacked rounded-circle text-danger btn-hover h5" target="blank"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="bg-overlay-bg" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, #b91523 100%);"></div>
                            </div>
                        </div>
                    </div>
                     @endforeach

					</div>
				</div>
			</div>
		</section>
    </div>
</div>
<style>
    .block-card-9 .grid-inner .btn-hover {
        opacity: 0;
        display: block;
        transition: opacity .3s ease, transform .3s .1s ease;
        margin-top: 15px;
        position: absolute;
        transform: translateY(0);
    }
    .block-card-9 .grid-inner:hover .btn-hover {
        opacity: 1;
        transform: translateY(-5px);
    }

    .block-card-9 .grid-inner .grid-image {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
    }

    .block-card-9 .grid-inner:hover .grid-image {
        -webkit-animation: kenburns 20s ease-out both;
        animation: kenburns 20s ease-out both;
    }

    .block-card-9 .grid-inner .grid-icon,
    .block-card-9 .grid-inner .grid-content {
        transition: transform .3s ease;
    }

    .block-card-9 .grid-inner:hover .grid-content { transform: translateY(-45px); }
    .block-card-9 .grid-inner:hover .grid-icon { transform: translateY(-5px); }

    @-webkit-keyframes kenburns {
      0% {
        -webkit-transform: scale(1) translate(0, 0);
                transform: scale(1) translate(0, 0);
        -webkit-transform-origin: 84% 84%;
                transform-origin: 84% 84%;
      }
      100% {
        -webkit-transform: scale(1.25) translate(20px, 15px);
                transform: scale(1.25) translate(20px, 15px);
        -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
      }
    }
    @keyframes kenburns {
      0% {
        -webkit-transform: scale(1) translate(0, 0);
                transform: scale(1) translate(0, 0);
        -webkit-transform-origin: 84% 84%;
                transform-origin: 84% 84%;
      }
      100% {
        -webkit-transform: scale(1.25) translate(20px, 15px);
                transform: scale(1.25) translate(20px, 15px);
        -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
      }
    }


</style>
