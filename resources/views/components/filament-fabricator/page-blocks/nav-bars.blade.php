@aware(['page'])
@props(['nav_items'])


<header id="heade" class="full-header header-size-md">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">
                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="#" class="standard-logo" data-dark-logo="images/Aliveng.png"><img
                            src="{{ asset('images/Aliveng.png') }}" alt="Alive-Nigeria"></a>
                    <a href="#" class="retina-logo" data-dark-logo="images/Aliveng.png"><img
                            src="{{ asset('images/Aliveng.png') }}" alt="Alive-Nigeria"></a>
                </div><!-- #logo end -->


                <!-- #logo end -->
                <div class="header-misc">
                    <!-- Top Search
                    ============================================= -->


                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">
                    <ul class="menu-container">
                        @foreach ($nav_items->items as $item)
                            <li class="menu-item">
                                <a class="menu-link"
                                    href="{{ isset($item['data']['url']) ? $item['data']['url'] : '#' }}">
                                    <div>{{ $item['label'] }}</div>
                                </a>
                                @if ($item['children'])
                                    <ul class="sub-menu-container">
                                        @foreach ($item['children'] as $children_item)
                                            <li class="menu-item">
                                                <a class="menu-link"
                                                    href="{{ isset($children_item['data']['url']) ? $children_item['data']['url'] : '#' }}">
                                                    <div>{{ $children_item['label'] }}</div>
                                                </a>
                                                @if ($children_item['children'])
                                                    <ul class="sub-menu-container">
                                                        @foreach ($children_item['children'] as $grand_child_item)
                                                            <li class="menu-item">
                                                                <a class="menu-link" target="blank"
                                                                    href="{{ isset($grand_child_item['data']['url']) ? $grand_child_item['data']['url'] : '#' }}">
                                                                    <div>{{ $grand_child_item['label'] }}</div>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
<style>
                    #logo img {
                        width: 200px;
                        height: auto;
                    }

    @media (max-width: 564.98px) {
        .logo_fit {
            margin-left: 0%;
        }
    }

    /* // Small devices (landscape phones, 576px and up) */
    @media (min-width: 565px) and (max-width: 767.98px) {
        .logo_fit {
            margin-left: 0%;
        }
    }

    /* // Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991.98px) {
        .logo_fit {
            margin-left: 0%;
        }
    }

    /* // Large devices (desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .logo_fit {
            margin-left: -2%;
        }
    }

    @media (min-width: 1200px) {
        .logo_fit {
            margin-left: -4%
        }
    }
</style>
