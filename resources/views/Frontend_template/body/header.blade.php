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
                                    <a href="{{ route('about.us') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">About</span>
                                            <span class="effect-1">About</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('portfolio') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">PORTFOLIO</span>
                                            <span class="effect-1">PORTFOLIO</span>
                                        </span>
                                    </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('we.do') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">We Do</span>
                                            <span class="effect-1">We Do</span>
                                        </span>
                                    </a>
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
