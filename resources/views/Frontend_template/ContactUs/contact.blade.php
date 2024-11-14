@extends('Frontend_template/frontend_master')
@section('content')
 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('Frontasset/assets/img/bg/breadcumb-bg1-6.jpg') }} ">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
            </div>
        </div>
    </div>

    <!--==============================
    Feature Area
    ==============================-->

    @foreach ( $contactViews as $contactItem)
    <div class="feature-area-1 space">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('Frontasset/assets/img/icon/location-pin-alt.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Headquarters</a>
                            </h4>
                            <p class="feature-card-text mb-0">27 Division St, New York,  </p>
                            <p class="feature-card-text">NY 10002, USA </p>

                            <a href="https://maps.google.com/" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Get direction</span>
                                    <span class="effect-1">Get direction</span>
                                </span>
                                <img src="{{ asset('Frontasset/assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('Frontasset/assets/img/icon/speech-bubble.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Email Address</a>
                            </h4>
                            <p class="feature-card-text mb-0">{{ $contactItem->contact_email  }}</p>
                            <p class="feature-card-text">frisk.agency@mail.com</p>
                            <a href="mailto:frisk.agency@mail.com" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Send message</span>
                                    <span class="effect-1">Send message</span>
                                </span>
                                <img src="{{ asset('Frontasset/assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('Frontasset/assets/img/icon/phone.svg') }}" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Phone Number</a>
                            </h4>
                            <p class="feature-card-text mb-0">{{ $contactItem->contact_mobile   }} </p>
                            <p class="feature-card-text">+1 800 223 984 002 </p>

                            <a href="tel:1800123654987" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Call anytime</span>
                                    <span class="effect-1">Call anytime</span>
                                </span>
                                <img src="{{ asset('Frontasset/assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endforeach
    <!--==============================
    Contact Area
    ==============================-->
    <div class="contact-area-1 space bg-theme">
        <div class="contact-map shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
            <iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="title-area mb-30">
                            <h2 class="sec-title">Have Any Project on Your Mind?</h2>
                            <p>Great! We're excited to hear from you and let's start something</p>
                        </div>
                        <form action="https://html.themegenix.com/frisk/mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="name" id="name" placeholder="Full name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="email" id="email" placeholder="Email address*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="website" id="website" placeholder="Website link">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="How Can We Help You*" id="contactForm" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="btn mt-20">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
