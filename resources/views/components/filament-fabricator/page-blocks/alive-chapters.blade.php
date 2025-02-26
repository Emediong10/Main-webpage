
@aware(['page'])

@props([
    'main_heading',
    'sub_heading',
    'features',
    'feature',
    'image',
    'title',
    'description',
])


<section id="page-title" style="background-color: #28591a" class=" page-title-dark">

    <div class="container clearfix">
        <h1 class="center">ALIVE-NIGERIA CHAPTERS</h1>

    </div>

</section>

<div class="py-0 my-0 bg-transparent section">
    <div class="container-fluid">
        <div class="container">
            <div class="mx-auto mt-4 text-center bottommargin heading-block" style="max-width: 640px;">
                <h2 class="mb-4 nott">{{ $main_heading }}</h2>
                <p class="mb-5 lead fw-normal font-primary">
                    {{ $sub_heading }}
                </p>
            </div>
        </div>

        <div class="clear"></div>

        @foreach ($features as $index => $feature)
            <div class="row align-items-md-center {{ $index % 2 !== 0 ? 'flex-md-row-reverse' : '' }}">
                <div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-75 d-flex align-self-stretch"
                     style="background:  url('{{ asset('storage/' . $feature['image']) }}')  no-repeat center center; background-size: cover;">
                </div>
                <div class="p-5 col-md-6 p-lg-6">
                    <h3 class="h3 bottommargin fw-medium px-lg-5">{{ $index + 1 }}. {{ $feature['title'] }}</h3>
                    <p class="m-0 px-lg-5">{{ $feature['description'] }}</p>
                </div>
            </div>
            <div class="clear"></div>
        @endforeach
    </div>
</div>

