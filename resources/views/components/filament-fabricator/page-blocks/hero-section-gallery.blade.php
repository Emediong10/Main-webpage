@aware(['page'])
@props([
    'title',
    'sub_title',
    'image1',
    'image2',
    'image3',
    'image4',
    'image5',
    'image6',
    'image7',
    'image8',
    'image9',
    'image10',
    'image11',
    'image12',
    'image13',
    'image14',
    'image15',

])
<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
         <div class="clearfix mb-0 section">
            <div class="mx-auto mb-0 heading-block center border-bottom-0" style="max-width: 640px">
                <h3 class="nott font-secondary fw-normal" style="font-size: 36px;">{{$title}}</h3>
                <span>{{$sub_title}}</span>
            </div>
        </div>

        <div class="masonry-thumbs grid-container grid-6" data-big="3" data-lightbox="gallery">
            <a class="grid-item" href="{{ asset('storage/'.$image1)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image1)}}" alt="Gallery Thumb 1">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image2)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image2)}}" alt="Gallery Thumb 2">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image3)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image3)}}" alt="Gallery Thumb 3">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image4)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image4)}}" alt="Gallery Thumb 4">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image5)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image5)}}" alt="Gallery Thumb 5">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image6)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image6)}}" alt="Gallery Thumb 6">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image7)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image7)}}" alt="Gallery Thumb 7">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image8)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image8)}}" alt="Gallery Thumb 8">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image9)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image9)}}" alt="Gallery Thumb 9">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image10)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image10)}}" alt="Gallery Thumb 10">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image11)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image11)}}" alt="Gallery Thumb 11">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image12)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image12)}}" alt="Gallery Thumb 12">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image13)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image13)}}" alt="Gallery Thumb 13">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image14)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image14)}}" alt="Gallery Thumb 14">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
            <a class="grid-item" href="{{ asset('storage/'.$image15)}}" data-lightbox="gallery-item">
                <div class="grid-inner">
                    <img src="{{ asset('storage/'.$image15)}}" alt="Gallery Thumb 15">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark">
                            <i class="mb-0 icon-line-plus h4" data-hover-animate="fadeIn"></i>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
