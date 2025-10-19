<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    public function ViewContactSection()
    {
        $contact = Contact::all();
        return view('admin.contact.view', compact('contact'));
    }

    public function AddContactSection()
    {
        return view('admin.contact.add');
    }

    public function StoreContactSection(Request $request)
    {
        $request->validate([

            'phone' => 'required | max:100',
            'mobile' => 'required | max:100',
            'email' => 'required | max:100',
            'facebook_url' => 'required | max:100',
            'twitter_url' => 'required | max:200',
            'instagram_url' => 'required | max:200',
            'linkedin_url' => 'required | max:200',

        ]);

        Contact::create([

            'phone' => $request->input('phone'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'linkedin_url' => $request->input('linkedin_url'),

        ]);

        return redirect()->route('admin.view.contact');

    }

    public function EditContactSection($id)
    {
        $contactData = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contactData'));
    }

    public function UpdateContactSection(Request $request, $id)
    {

        $contactData = Contact::findOrFail($id);


        $validated = $request->validate([
            'phone' => 'required | max:100',
            'mobile' => 'required | max:100',
            'email' => 'required | max:100',
            'facebook_url' => 'required | max:100',
            'twitter_url' => 'required | max:200',
            'instagram_url' => 'required | max:200',
            'linkedin_url' => 'required | max:200',
        ]);


        $contactData->update($validated);

        return redirect()->route('admin.view.contact')->with('success', ' بروزرسانی شد');
    }

    public function DeleteContactSection($id)
    {

        $contactData = Contact::findOrFail($id);
        $contactData->delete();
        return redirect()->route('admin.view.contact');

    }

}
