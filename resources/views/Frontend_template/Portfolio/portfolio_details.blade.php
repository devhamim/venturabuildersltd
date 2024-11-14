@extends('Frontend_template/frontend_master')
@section('content')
 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('Frontasset/assets/img/bg/breadcumb-bg1-1.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Protfolio</h1>
            </div>
        </div>
    </div>

    <!--==============================
    Project Details Page Area
    ==============================-->
    <div class="team-area-1 space-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="my-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="">
                            <img src="{{ asset('Frontasset') }}/assets/img/1.jpg" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            {{-- <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3> --}}
                            <span class="team-card_desig">ENGINEERING DESIGN, MIRPUR, DOHSENGINEERING DESIGN, DUKKHO, GAZIPUR</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="">
                            <img src="{{ asset('Frontasset') }}/assets/img/2.jpg" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            {{-- <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3> --}}
                            <span class="team-card_desig">DESIGN & SUPERVISION, DOCTOR’S VIAA-GAZIPURDESIGN-BUILD, ANNONA, JASHORE</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="">
                            <img src="{{ asset('Frontasset') }}/assets/img/3.jpeg" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            {{-- <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3> --}}
                            <span class="team-card_desig">ENGINEERING DESIGN, TRISHAL ECONOMIC ZONE DORMITORY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
