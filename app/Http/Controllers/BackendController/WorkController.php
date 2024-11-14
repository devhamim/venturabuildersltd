<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use App\Models\WorkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function WorkCatAll() {

        $work_categories = WorkCategory::latest()->SimplePaginate(3);
        $trash_work_categories = WorkCategory::onlyTrashed()->latest()->SimplePaginate(3);

        return view('Backend_template.Work_category.all_work_category', compact('work_categories', 'trash_work_categories'));
    }

    public function WorkCatAdd(){
        return view('Backend_template.Work_category.add_work_category');
    }

    public function WorkCatStore(Request $request){

        $validatedData = $request->validate([
            'work_category_name' => 'required|unique:work_categories|max:255',

        ],
        [
            'work_category_name.required' => 'Please Input Category Name',
            'work_category_name.max' => 'Category Less Then 255Chars',
        ]);

        WorkCategory::insert([
            'user_id' => Auth::user()->id,
            'work_category_name' =>$request->work_category_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' =>'Work Category Add Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('work.category.all')->with($notification);
    }

    public function WorkCatEdit($id){
        $work_category_edits = WorkCategory::findorfail($id);
        return view('Backend_template.Work_category.edit_work_category', compact('work_category_edits'));
    }

    public function WorkCatUpdate(Request $request, $id){

        $validatedData = $request->validate([
            'work_category_name' => 'required|unique:work_categories|max:255',

        ],
        [
            'work_category_name.required' => 'Please Input Category Name',
            'work_category_name.max' => 'Category Less Then 255Chars',
        ]);

        WorkCategory::findorfail($id)->update([
            'work_category_name' => $request->work_category_name,
            'user_id' => Auth::user()->id,
        ]);

        $notification = array(
            'message' =>'Work Category Updated Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('work.category.all')->with($notification);
    }

    public function WorkCatSoftDelete($id){
        WorkCategory::findorfail($id)->delete();

        $notification = array(
            'message' =>'Work Category Delete Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('work.category.all')->with($notification);
    }

    public function WorkCatRestore($id) {

        WorkCategory:: withTrashed()->findorfail($id)->restore();

        $notification = array(
            'message' =>'Work Category Restore Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('work.category.all')->with($notification);
    }


    public function WorkCatForceDelete($id)  {

        WorkCategory:: withTrashed()->findorfail($id)->forceDelete();

        $notification = array(
            'message' =>'Work Category Parmanently Delete',
            'alert-type' =>'success'
        );
        return redirect()->route('work.category.all')->with($notification);

    }


}
