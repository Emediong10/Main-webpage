@props([
    'title' => null,
    'dir' => 'ltr',
    'meta_description' => null,
    'seo_tags' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $dir }}" class="filament-fabricator">

<head>
    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.start') }}

    @php
        $curator = Awcodes\Curator\Models\Media::find(site_config('site_favicon'));
        $favicon = $curator != null ? $curator->url : url('images/favicon.png');
        \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::favicon($favicon);
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="{{ $meta_description != null ? $meta_description : $title }}" />
    <meta name="keywords" content="{{ !is_null($seo_tags) ? implode(',', $seo_tags) : null }}" />
    <meta name="author"
        content="{{ site_config('site_author') != null ? site_config('site_author') : 'Site Author' }}" />


    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    @if ($favicon = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getFavicon())
        <link rel="icon" href="{{ $favicon }}">
    @endif

    <title>{{ $title ? "{$title} - " : null }} {{ config('app.name') }}</title>


    <style>
        [x-cloak=""],
        [x-cloak="x-cloak"],
        [x-cloak="1"] {
            display: none !important;
        }
    </style>


    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <link rel="stylesheet" href="{{ $path }}" />
        @endif
    @endforeach

    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::head.end') }}
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/66fa95ac4cbc4814f7e0ee03/1i91dhala';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

<body class="filament-fabricator-body">
    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.start') }}

    {{ $slot }}

    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.start') }}

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <script defer src="{{ $path }}"></script>
        @endif
    @endforeach

    @stack('scripts')

    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::scripts.end') }}

    {{ \Filament\Support\Facades\FilamentView::renderHook('filament-fabricator::body.end') }}
</body>

</html>
