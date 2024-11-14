<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\About;
use App\Models\PortfolioCategory;
use App\Models\Banner;

class FrontContactController extends Controller
{


    public function BannerDetail(){

        $bannerDetails = Banner::all();
        return view('Frontend_template/FrontBanner/banner_details',compact('bannerDetails'));
    }

    public function ContactUs(){

        $contactViews = Contact::latest()->get();
        return view('Frontend_template/ContactUs/contact',compact('contactViews'));
    }


    public function AboutUs(){

        $aboutViews = About::latest()->get();
        return view('Frontend_template/AboutUs/about',compact('aboutViews'));
    }

    public function PortfolioDetails(){

        $portfolioDetails = PortfolioCategory::all();
        return view('Frontend_template/Portfolio/portfolio_details',compact('portfolioDetails'));
    }
}
