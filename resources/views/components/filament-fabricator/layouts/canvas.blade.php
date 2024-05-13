@props(['page','preview'])
<x-filament-fabricator.base.base :title="$page->title" :meta_description="$page->meta_description ? $page->meta_description: ($page->description?$page->description:null)" :seo_tags="$page->seo_tags">
    {{-- Header Here --}}

	@php
    \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::registerStyles([
        '<link rel="preconnect" href="https://fonts.googleapis.com">',
        '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
        '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">',
        '<link href="https://api.fontshare.com/v2/css?f[]=sentient@400,700,201,301,200,501,500,300,2,1,401,701&display=swap" rel="stylesheet">',
        url('assets/css/bootstrap.css'),
        asset('assets/style.css'),
        asset('assets/css/bootstrap.min.css'),
        asset('assets/css/bootstrap-icons.css'),
        asset('assets/css/swiper.css'),
        asset('assets/css/dark.css'),
        asset('assets/css/slick.css'),
        asset('assets/css/font-icons.css'),
        asset('assets/css/animate.css'),
        asset('assets/css/magnific-popup.css'),
        asset('assets/css/tooplate-little-fashion.css'),
        asset('assets/css/custom.css')
       
    ]);
@endphp


	 @if(site_config('g-tag')!=null)
      {!! site_config('g-tag') !!}
   @endif
    @if(isset($preview) && $preview==1)
    <x-filament-fabricator::page-blocks :blocks="$page->preview_blocks" />
    @else
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    @endif

    <!-- JavaScripts
	============================================= -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/Headroom.js')}}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.js')}}"></script>
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.js')}}"></script>
	<script src="{{ asset('assets/js/plugins.min.js')}}"></script>
   <!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('assets/js/functions.js')}}"></script>

	@section('scripts')
    @show
  
    {{-- Footer Here --}}




</x-filament-fabricator.base.base>
