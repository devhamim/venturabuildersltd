<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\PortfolioCategory;

class PortfolioCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function PortfolioCatAll(){
        $portfolio_categories = PortfolioCategory::latest()->SimplePaginate(5);
        $trashed_portfolio_categories = PortfolioCategory::onlyTrashed()->SimplePaginate(5);

        return view('Backend_template.Portfolio_category.all_portfolio_category', compact('portfolio_categories', 'trashed_portfolio_categories'));
    }


    public function PortfolioCatAdd(){

        return view('Backend_template.Portfolio_category.add_portfolio_category');
    }

    public function PortfolioCatStore(Request $request){

        $validatedData = $request->validate([

            'portfolio_category_name' => 'required|unique:portfolio_categories|max:255',
        ],
        [
            'portfolio_category_name.required' => 'Please Input Category Name',
            'portfolio_category_name.required' => 'Category Less Then 255Chars',

        ]);

        PortfolioCategory::insert([
            'user_id' => Auth::user()->id,
            'portfolio_category_name' => $request->portfolio_category_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' =>'Portfolio Category Add Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.category.all')->with($notification);
    }


    public function PortfolioCatEdit($id){
        $edite_portfolio_cats = PortfolioCategory::findorfail($id);

        return view('Backend_template.Portfolio_category.edit_portfolio', compact('edite_portfolio_cats'));
    }


    public function PortfolioCatUpdate(Request $request, $id){

        $validatedData = $request->validate([

            'portfolio_category_name' => 'required|unique:portfolio_categories|max:255',
        ],
        [
            'portfolio_category_name.required' => 'Please Input Category Name',
            'portfolio_category_name.required' => 'Category Less Then 255Chars',

        ]);

        PortfolioCategory::findorfail($id)->update([
            'user_id' => Auth::user()->id,
            'portfolio_category_name' => $request->portfolio_category_name,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' =>'Portfolio Category Updated Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.category.all')->with($notification);

    }

    public function PortfolioCatDelete($id){
        PortfolioCategory::findorfail($id)->delete();

        $notification = array(
            'message' =>'Portfolio Category Delete Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.category.all')->with($notification);
    }

    public function PortfolioCatRestore($id){
        PortfolioCategory::withTrashed()->findorfail($id)->restore();

        $notification = array(
            'message' =>'Portfolio Category Restore Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.category.all')->with($notification);
    }

    public function PortfolioCatForceDelete($id){
        PortfolioCategory::withTrashed()->findorfail($id)->forceDelete();

        $notification = array(
            'message' =>'Portfolio Category Parmanently Deleted',
            'alert-type' =>'success'
        );
        return redirect()->route('portfolio.category.all')->with($notification);
    }


}
