<header class="nav-header header-layout2">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('Frontasset/assets/img/logo-sm.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="active menu-item-has-children">
                                    <a href="{{ url('/') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">HOME</span>
                                            <span class="effect-1">HOME</span>
                                        </span>
                                    </a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html">Digital Agency</a></li>
                                        <li><a href="home-2.html">Creative Agency</a></li>

                                        <li class="active"><a href="home-12.html">Fullscreen Slideshow</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="link-effect">
                                            <span class="effect-1">About</span>
                                            <span class="effect-1">About</span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about.us') }}">About Us</a></li>
                                        {{-- <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">Service Version 1</a></li>
                                                <li><a href="service-2.html">Service Version 2</a></li>
                                                <li><a href="service-3.html">Service Version 3</a></li>
                                                <li><a href="service-details.html">Service Details Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="team.html">Team Page</a>
                                        </li>
                                        <li><a href="team-details.html">Team Details Page</a></li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQ Page</a></li>
                                        <li><a href="error.html">Error Page</a></li>--}}
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="link-effect">
                                            <span class="effect-1">PORTFOLIO</span>
                                            <span class="effect-1">PORTFOLIO</span>
                                        </span>
                                    </a>



                                    <ul class="sub-menu">
                                        @php
                                            $portfolioCat = App\Models\PortfolioCategory::all();

                                        @endphp
                                        @foreach( $portfolioCat as $item)
                                        <li><a href="{{ route('portfolio.details',$item->id) }}">{{ $item->portfolio_category_name  }}</a></li>
                                        @endforeach
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="link-effect">
                                            <span class="effect-1">We Do</span>
                                            <span class="effect-1">We Do</span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        @php
                                        $workCats = App\Models\WorkCategory::all();
                                    @endphp
                                    @foreach( $workCats as $item)
                                        <li><a href="blog.html">{{ $item->work_category_name  }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('contact.us') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">CONTACT</span>
                                            <span class="effect-1">CONTACT</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button type="button" class="menu-toggle sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <a href="project.html" class="btn bg-theme text-title">
                                <span class="link-effect">
                                    <span class="effect-1">WORKS WITH US</span>
                                    <span class="effect-1">WORKS WITH US</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
