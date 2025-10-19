<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutSectionController extends Controller
{
    public function ViewAboutSection()
    {
        $about = About::all();
        return view('admin.about.view', compact('about'));
    }

    public function AddAboutSection()
    {
        return view('admin.about.add');
    }

    public function StoreAboutSection(Request $request)
    {
        $request->validate([
            'about_details' => 'required|string|max:100',
            'about_image' => 'image|max:2046'
        ]);

        $path = '';

        if ($request->hasFile('about_image'))
        {
            $image = $request->about_image;
            $imageName = rand().'_'. $image->getClientOriginalName();
            $image->move(public_path('uploads/about_image'),$imageName);

            $path = 'uploads/about_image/'. $imageName;
        }

        About::create([
            'about_details' => $request->input('about_details'),
            'about_image' => $path ,
        ]);

        return redirect()->route('admin.view.about');
    }

    public function EditAboutSection($id)
    {
        $aboutData = About::findOrFail($id);
        return view('admin.about.edit',compact('aboutData'));
    }

    public function UpdateAboutSection(Request $request, $id)
    {
        $aboutData = About::findOrFail($id);

        $request->validate([
            'about_details' => 'required|string|max:100',
            'about_image' => 'image|max:2046',
        ]);

        $path = '';

        if ($request->hasFile('about_image'))
        {
            if(File::exists(public_path($aboutData->about_image))){
                File::delete(public_path($aboutData->about_image));
            }
            $image = $request->about_image;
            $imageName = rand().'_'. $image->getClientOriginalName();
            $image->move(public_path('uploads/about_image'),$imageName);

            $path = 'uploads/about_image/'. $imageName;
        }


        $aboutData->update([
            'about_details' => $request->input('about_details'),
            'about_image' => $path,


        ]);
        return redirect()->route('admin.view.about');
    }

    public function DeleteAboutSection($id)
    {
        $aboutData = About::find($id);
        if(File::exists(public_path($aboutData->about_image))){
            File::delete(public_path($aboutData->about_image));
        }
        $aboutData->delete();
        return redirect()->route('admin.view.about');
    }

}
