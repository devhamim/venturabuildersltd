<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Experience;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ExperienceCatAll(){
        $experience_categories = Experience::latest()->SimplePaginate(5);

        $trashed_experience_cats = Experience::onlyTrashed()->SimplePaginate(5);
        return view('Backend_template.Experience_Category.all_experience_category', compact('experience_categories', 'trashed_experience_cats'));
    }

    public function ExperienceCatAdd(){
        return view('Backend_template.Experience_Category.add_experience_category');
    }

    public function ExperienceCatStore(Request $request){


        $validatedData = $request->validate([

            'experience_category_name' => 'required|unique:portfolio_categories|max:255',
        ],
        [
            'experience_category_name.required' => 'Please Type Experience Category Name',
            'experience_category_name.required' => 'Category Less Then 255Chars',

        ]);

        Experience::insert([
            'user_id' => Auth::user()->id,
            'experience_category_name' => $request->experience_category_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' =>'Experience Category Add Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('experience.category.all')->with($notification);
    }


    public function ExperienceCatEdit($id){
        $edit_exp_categories = Experience:: findorfail($id);
        return view('Backend_template.Experience_Category.edit_experience_category', compact('edit_exp_categories'));
    }

    public function ExperienceCatUpdate(Request $request, $id) {

        $validatedData = $request->validate([
            'experience_category_name' => 'required|unique:experiences|max:255',

        ],
        [
            'experience_category_name.required' => 'Please Input Category Name',
            'experience_category_name.max' => 'Category Less Then 255Chars',
        ]);

        Experience::findorfail($id)->update([
            'user_id' => Auth::user()->id,
            'experience_category_name' => $request->experience_category_name,
        ]);

        $notification = array(
            'message' =>'Experience Category Updated Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('experience.category.all')->with($notification);

    }

    public function ExperienceCatDelete($id){
        Experience::findorfail($id)->delete();

        $notification = array(
            'message' =>'Experience Category Delete Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('experience.category.all')->with($notification);
    }


    public function ExperienceCatRestore($id){
        Experience::withTrashed()->findorfail($id)->restore();

        $notification = array(
            'message' =>'Experience Category Restored Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('experience.category.all')->with($notification);
    }


    public function ExperienceCatForceDelete($id){
        Experience::withTrashed()->findorfail($id)->forceDelete();

        $notification = array(
            'message' =>'Experience Category Parmanently Delete',
            'alert-type' =>'success'
        );
        return redirect()->route('experience.category.all')->with($notification);
    }

}
