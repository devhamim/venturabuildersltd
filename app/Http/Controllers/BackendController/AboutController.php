<?php

namespace App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllAbout()
    {
        $all_abouts = About::latest()->simplePaginate(10);

        $trash_abouts = About::onlyTrashed()->latest()->simplePaginate(5);
        return view('Backend_template/About/all_about',compact('all_abouts', 'trash_abouts'));
    }


    public function AddAbout()
    {
        return view('Backend_template/About/add_about');
    }



    public function StoreAbout (Request $request) {

        About::insert([
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
                'message' =>'About Add Successfully',
                'alert-type' =>'success'
            );
           return redirect()->route('all.about')->with($notification);
    }


    public function EditAbout($id){
        $edit_abouts = About::findOrFail($id);
        return view('Backend_template/About/edit_about', compact('edit_abouts'));
    }


public function UpdateAbout (Request $request, $id) {

        About::findorfail($id)->update([
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
                'message' =>'About Details Updated Successfully',
                'alert-type' =>'success'
            );
           return redirect()->route('all.about')->with($notification);
    }




    public function SoftDeleteAbout ($id)
    {
        About::findorfail($id)->delete();

        $notification = array(
            'message' => 'About Details Deleted Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('all.about')->with($notification);
    }

    public function RestoreAbout($id){
        $restore = About::withTrashed()->findorfail($id)->restore();

        $notification = array(
            'message' => 'About Details Restore Successfully',
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    public function PermanentDelete ($id)
    {
        About::withTrashed()->findorfail($id)->forceDelete();

        $notification = array(
            'message' => 'About Details Permanentlly Deleted',
            'alert-type' => 'success'
        );

            return redirect()->route('all.about')->with($notification);
    }
}

