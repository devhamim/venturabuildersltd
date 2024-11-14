<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use App\Models\Banner;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllBanner(){
        $banners = Banner::latest()->SimplePaginate(5);
        return view('Backend_template.Banner.all_banner', compact('banners'));
    }

    public function AddBanner(){
        return view('Backend_template.Banner.add_banner');
    }



    public function StoreBanner (Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'banner_name' => 'required',
            'banner_details' => 'required',
            'banner' => 'required|mimes:jpg,jpeg,png,svg',

        ],
        [
            'banner_name.required' => 'Please Enter Banner Name',
            'banner_details.max' => 'Please Enter Banner Details',
            'banner.max' => 'Please Upload Banner Image',
        ]);

        // Image Intervansion use

        $images = $request->file('banner');

        $name_gen = hexdec(uniqid()).'.'.$images->getClientOriginalExtension();
        Image::make($images)->resize(1920,1080)->save('uploads/banner_image/'.$name_gen);
        $last_img = 'uploads/banner_image/'.$name_gen;

        Banner::insert([

            'user_id' => Auth::user()->id,
            'banner_name' => $request->banner_name,
            'banner_details' => $request->banner_details,
            'banner' => $last_img,
            'created_at' =>Carbon::now()
            ]);


        $notification = array(
            'message' => 'Banner  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.banner')->with($notification);

    }



    public function EditBanner ($id)
    {
        $edit_banner = Banner::find($id);
        return view('Backend_template.Banner.edit_banner',compact('edit_banner'));
    }

    public function UpdateBanner (Request $request,$id)
    {
        
        $change_banner = $request->old_banner;
        $up_banner = $request->file('banner');

        if($up_banner){
        $name_gen = hexdec(uniqid());
        $banner_ext = strtolower($up_banner->getClientOriginalExtension());
        $banner_name = $name_gen.'.'.$banner_ext;
        $up_location = 'uploads/banner_image/';
        $last_banner = $up_location.$banner_name;
        $up_banner->move($up_location,$banner_name);

        unlink($change_banner);

        Banner::find($id)->update([
            'user_id' => Auth::user()->id,
            'banner_name' => $request->banner_name,
            'banner_details' => $request->banner_details,
            'banner' =>$last_banner,
            'updated_at' =>Carbon::now()
            ]);

            $notification = array(
                'message' => 'Banner  Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.banner')->with($notification);

        }else{

            Banner::find($id)->update([
            'user_id' => Auth::user()->id,
            'banner_name' => $request->banner_name,
            'banner_details' => $request->banner_details,
            'updated_at' =>Carbon::now()
            ]);

            $notification = array(
                'message' => 'Banner  Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.banner')->with($notification);
        }
    }


    public function BannerDelete($id){
        Banner::findorfail($id)->delete();

        $notification = array(
            'message' => 'Banner  Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.banner')->with($notification);

    }


}
