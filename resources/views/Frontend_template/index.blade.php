
@extends('Frontend_template/frontend_master')
@section('title', 'Ventura Builders ltd || Home')
@section('content')

<div class="project-area-12 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="project-slider-showcase-wrap style2">
            <div class="row g-0 global-carousel project-slider-showcase" data-slide-show="1" data-vertical="true">

                @php
                    $portfolioCat = App\Models\PortfolioCategory::all();
                    $banners = App\Models\Banner::all();
                @endphp
                @foreach( $banners as $item)
                <div class="col-lg-4">
                    <div class="portfolio-wrap style12">
                        <div class="portfolio-thumb">
                            {{-- <img src="{{ asset('Frontasset/assets/img/portfolio/portfolio8_1.jpg')}}" alt="portfolio"> --}}
                            <img src="{{ $item->banner  }}" alt="portfolio">
                        </div>
                        <div class="portfolio-details">
                            <div class="media-left">
                                <ul class="portfolio-meta">
                                    @foreach ( $portfolioCat as $cat)
                                    <li><a href="blog.html">{{ $cat->portfolio_category_name }}</a></li>
                                    @endforeach
                                </ul>

                                    <h3 class="portfolio-title"><a href="{{ route('banner.details',$item->id) }}">{{ $item->banner_name  }}</a></h3>


                            </div>
                            <div class="portfolio-details-btn">
                                <a href="{{ route('banner.details',$item->id) }}" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW PROJECT</span>
                                        <span class="effect-1">VIEW PROJECT</span>
                                    </span>
                                    <img src="{{ asset('Frontasset/assets/img/icon/arrow-left-top.svg')}}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
