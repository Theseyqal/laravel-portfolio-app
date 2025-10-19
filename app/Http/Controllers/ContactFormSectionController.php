<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormSectionController extends Controller
{
    public function ViewContactFormSection()
    {
        $allcontacts = ContactForm::all();
        return view('admin.contact_form.view' , compact('allcontacts'));
    }

    public function StoreContactFormSection(Request $request)
    {
        $request->validate([

            'name' => 'required|max:100',
            'phone' => 'required|max:100',
            'email' => 'required|max:100',
            'message' => 'required|max:100',


        ]);

        ContactForm::create([

            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),


        ]);

        return redirect()->route('welcome')->with('success', 'پیام شما با موفقیت ارسال شد.');


    }
    public function DeleteContactFormSection($id)
    {

        $contactData = ContactForm::findOrFail($id);
        $contactData->delete();
        return redirect()->route('admin.view.contact.form');

    }
}
