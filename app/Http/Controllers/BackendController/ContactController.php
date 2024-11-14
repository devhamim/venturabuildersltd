<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Carbon\Carbon;

use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ContactAll (){

        $contacts = Contact::latest()->simplePaginate(3);
        $trash_contacts = Contact::onlyTrashed()->latest()->SimplePaginate(2);
        return view('Backend_template/Contact/contact_index', compact('contacts', 'trash_contacts'));
    }

    public function ContactAdd(){
        return view('Backend_template.Contact.add_contact');
    }

    public function ContactStore(Request $request){

        $validatedData = $request->validate([

            'contact_title' => 'required',
            'contact_mobile' => 'required',
        ],

        [
            'contact_title.required' => 'Please Type Contact Title',
            'contact_mobile.required' => 'Please Type Contact Mobile',

        ]);

        Contact::insert([
            'contact_title' => $request->contact_title,
            'contact_mobile' => $request->contact_mobile,
            'contact_email' => $request->contact_email,
            'contact_description' => $request->contact_description,
            'contact_google_map' => $request->contact_google_map,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
                'message' =>'Contact Add Successfully',
                'alert-type' =>'success'
            );
            return redirect()->route('contact.all')->with($notification);

    }

    public function ContactEdit($id){
        $edit_contacts = Contact::findorfail($id);
        return view('Backend_template.Contact.contact_edit', compact('edit_contacts'));
    }


    public function ContactUpdate(Request $request, $id){


        Contact::findorfail($id)->update([
            'contact_title' => $request->contact_title,
            'contact_mobile' => $request->contact_mobile,
            'contact_email' => $request->contact_email,
            'contact_description' => $request->contact_description,
            'contact_google_map' => $request->contact_google_map,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
                'message' =>'Contact Details Updated Successfully',
                'alert-type' =>'success'
            );
           return redirect()->route('contact.all')->with($notification);

    }

    public function ContactSoftDelete($id) {
        Contact:: findorfail($id)->delete();

        $notification = array(
            'message' => 'Contact Details Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contact.all')->with($notification);
    }

    public function ContactRestore($id){
        Contact:: withTrashed()->findorfail($id)->restore();

        $notification = array(
            'message' => 'Contact Details Restored Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contact.all')->with($notification);

    }

    public function ContactForceDelete($id){

        Contact::withTrashed()->findOrFail($id)->forceDelete();

        $notification = array(
            'message' => 'Contact Details Parmanently Delete',
            'alert-type' => 'success'
        );

        return redirect()->route('contact.all')->with($notification);

    }
}
