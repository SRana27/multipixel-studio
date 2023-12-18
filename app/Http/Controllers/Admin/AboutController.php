<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function addAbout()
    {
        return view('admin.about.add_about');
    }

    public function saveAbout(Request $request)
    {
        About::storeAbout($request);
        return redirect('/add-about')->with('message','About add successfully');
    }

    public function manageAbout()
    {
        return view('admin.about.manage_about',
            ['abouts'=>About::orderBy('id','desc')->get()]);

    }

    public function editAbout($about_id)
    {
        return view('admin.about.edit_about',
            ['about'=>About::find($about_id)]);
    }

    public function updateAbout(Request $request)
    {
        About::storeAbout($request);
        return redirect('/manage-about')->with('message','About update successfully');
    }


    public function deleteAbout(Request $request)
    {
        About::about_delete($request);
        return redirect('/manage-about')->with('message','About delete successfully');
    }
}
