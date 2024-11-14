<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;


use App\Models\Logo;

class SettingController extends Controller
{
    public function Setting() {

        return view('Backend_template.Settings.all_settings');
    }


    public function Logo() {
        $logo_view = Logo::latest()->get();
        return view('Backend_template.Settings.logo', compact('logo_view'));
    }

    public function LogoChange() {

        return view('Backend_template.Settings.logo_update');
    }

    public function LogoEdit($id) {
        $view_logo = Logo::findorfail($id);
        return view('Backend_template.Settings.logo_update',compact('view_logo'));
    }


    public function LogoStore(Request $request) {

       // Image Intervansion use

       $logos = $request->file('logo_image');

       $name_gen = hexdec(uniqid()).'.'.$logos->getClientOriginalExtension();
       Image::make($logos)->resize(250,80)->save('uploads/logo/'.$name_gen);
       $last_img = 'uploads/logo/'.$name_gen;

       Logo::insert([

           'logo_image' => $last_img,
           'created_at' =>Carbon::now()
           ]);


       $notification = array(
           'message' => 'Portfolio  inserted Successfully',
           'alert-type' => 'success'
       );

       return redirect()->route('dashboard')->with($notification);
}




}
