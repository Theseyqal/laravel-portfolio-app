<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectSectionController extends Controller
{
    public function ViewProjectSection()
    {
        $project = Project::all();
        return view('admin.project.view', compact('project'));
    }

    public function AddProjectSection()
    {
        return view('admin.project.add');
    }

    public function StoreProjectSection(Request $request)
    {
        $request->validate([
            'class' => 'required|string|max:100',
            'image' => 'image|max:2046',
            'title' => 'required|string|max:2046',
            'sub_title' => 'required|string|max:2046'
        ]);

        $path = '';

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/project_image'), $imageName);

            $path = 'uploads/project_image/' . $imageName;
        }

        Project::create([
            'class' => $request->input('class'),
            'image' => $path,
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
        ]);

        return redirect()->route('admin.view.project');
    }

    public function EditProjectSection($id)
    {
        $projectData = Project::findOrFail($id);
        return view('admin.project.edit', compact('projectData'));
    }

    public function UpdateProjectSection(Request $request, $id)
    {
        $projectData = Project::findOrFail($id);

        $request->validate([
            'class' => 'required|string|max:100',
            'image' => 'image|max:2046',
            'title' => 'required|string|max:2046',
            'sub_title' => 'required|string|max:2046',
        ]);

        $path = '';

        if ($request->hasFile('image'))
        {
            if(File::exists(public_path($projectData->image))){
                File::delete(public_path($projectData->image));
            }
            $image = $request->image;
            $imageName = rand().'_'. $image->getClientOriginalName();
            $image->move(public_path('uploads/project_image'),$imageName);

            $path = 'uploads/project_image/'. $imageName;
        }


        $projectData->update([
            'class' => $request->input('class'),
            'image' => $path,
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),


        ]);

        return redirect()->route('admin.view.project');

    }

    public function DeleteProjectSection($id)
{

    $project = Project::find($id);

    if (!$project) {
        return redirect()->back()->with('error', 'پروژه مورد نظر پیدا نشد.');
    }

    $imagePath = public_path($project->image);
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }


    $project->delete();

    return redirect()->route('admin.view.project')->with('success', 'پروژه با موفقیت حذف شد.');
}
}
