<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceSectionController extends Controller
{
    public function ViewExperienceSection()
    {
        $experience = Experience::all();
        return view('admin.experience.view',compact('experience'));
    }

    public function AddExperienceSection()
    {
        return view('admin.experience.add');
    }

    public function StoreExperienceSection(Request $request)
    {
        $request->validate([

            'timeline' => 'required | max:100',
            'title' => 'required | max:100',
            'sub_title' => 'required | max:100',
            'second_title' => 'required | max:100',
            'description' => 'required | max:200',

        ]);

        Experience::create([

            'timeline' => $request->input('timeline'),
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'second_title' => $request->input('second_title'),
            'description' => $request->input('description'),

        ]);

        return redirect()->route('admin.view.experience');

    }

    public function EditExperienceSection($id)
    {
        $experienceData = Experience::findOrFail($id);
        return view('admin.experience.edit' , compact('experienceData'));
    }

   public function UpdateExperienceSection(Request $request, $id)
{

    $experienceData = Experience::findOrFail($id);


    $validated = $request->validate([
        'timeline' => 'required|max:100',
        'title' => 'required|max:100',
        'sub_title' => 'required|max:100',
        'second_title' => 'required|max:100',
        'description' => 'required|max:200',
    ]);


    $experienceData->update($validated);

    return redirect()->route('admin.view.experience')->with('success', ' بروزرسانی شد');
    }

    public function DeleteExperienceSection($id)
    {

        $experienceData = Experience::findOrFail($id);
        $experienceData->delete();
        return redirect()->route('admin.view.experience');

    }
}

