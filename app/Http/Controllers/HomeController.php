<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function ViewHomeSection()
    {
        $home = Home::all();
       return view('admin.home.view',compact('home'));
    }

    public function AddHomeSection()
    {
        return view('admin.home.add');
    }

    public function StoreHomeSection(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'profession' => 'required|string|max:100'
        ]);

        Home::create([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
        ]);

        return redirect()->route('admin.view.home');
    }

    public function EditHomeSection($id)
    {
        $homeData = Home::findOrFail($id);
        return view('admin.home.edit',compact('homeData'));
    }

    public function UpdateHomeSection(Request $request,$id)
    {
        $homeData = Home::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'profession' => 'required|string|max:100'
        ]);

        $homeData->update([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),

        ]);
        return redirect()->route('admin.view.home');
    }

    public function DeleteHomeSection($id)
    {
        $homeData = Home::find($id);
        $homeData->delete();
        return redirect()->route('admin.view.home');
    }

}
