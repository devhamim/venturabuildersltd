<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

use App\Models\PortfolioCategory;
use App\Models\Portfolio;

class PortfolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PortfolioAll(){
        $portfolios = Portfolio::latest()->SimplePaginate(5);
        $trashed_portfolio_categories = PortfolioCategory::onlyTrashed()->SimplePaginate(5);

        return view('Backend_template.Portfolio.all_portfolio',compact('portfolios'));
    }


    public function PortfolioAdd(){
        $port_cats = PortfolioCategory::orderBy('portfolio_category_name', 'ASC')->get();

        return view('Backend_template.Portfolio.add_portfolio', compact('port_cats'));
    }

    public function PortfolioStore (Request $request): RedirectResponse
    {

        // Image Intervansion use

        $images = $request->file('image');

        foreach($images as $image){

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,1200)->save('uploads/portfolio_image/'.$name_gen);
        $last_img = 'uploads/portfolio_image/'.$name_gen;

        Portfolio::insert([

            'user_id' => Auth::user()->id,
            'portfolio_category_id' => $request->portfolio_category_id,
            'portfolio_name' => $request->portfolio_name,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'details' => $request->details,
            'image' => $last_img,
            'created_at' =>Carbon::now()
            ]);
        }

        $notification = array(
            'message' => 'Portfolio  inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('portfolio.all')->with($notification);

    }

    public function PortfolioEdit($id){
        $edite_portfolio = Portfolio::findorfail($id);
        $edite_port_cats = PortfolioCategory::orderBy('portfolio_category_name','ASC')->get();

        return view('Backend_template.Portfolio.edit_portfolio', compact('edite_portfolio','edite_port_cats'));
    }


    public function PortfolioUpdate(Request $request, $id){

        $change_image = $request->old_image;
        $up_image = $request->file('image');

        if($up_image){
        $name_gen = hexdec(uniqid());
        $image_ext = strtolower($up_image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$image_ext;
        $up_location = 'uploads/portfolio_image/';
        $last_img = $up_location.$image_name;
        $up_image->move($up_location,$image_name);

        unlink($change_image);

        Portfolio::find($id)->update([

            'user_id' => Auth::user()->id,
            'portfolio_category_id' => $request->portfolio_category_id,
            'portfolio_name' => $request->portfolio_name,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'details' => $request->details,
            'image' => $last_img,
            'updated_at' =>Carbon::now()

            ]);

            $notification = array(
                'message' => 'Banner  Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('portfolio.all')->with($notification);

        }else{

            Portfolio::find($id)->update([

            'user_id' => Auth::user()->id,
            'portfolio_category_id' => $request->portfolio_category_id,
            'portfolio_name' => $request->portfolio_name,
            'client_name' => $request->client_name,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'details' => $request->details,
            'updated_at' =>Carbon::now()

            ]);

            $notification = array(
                'message' => 'Portfolio  Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('portfolio.all')->with($notification);
        }

    }

    public function PortfolioDelete($id){
        Portfolio::findorfail($id)->delete();

        $notification = array(
            'message' =>'Portfolio Delete Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.all')->with($notification);
    }



}
