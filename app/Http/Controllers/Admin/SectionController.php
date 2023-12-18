<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
  public function addSection(){
      return view('admin.section.add_section');
  }
  public function saveSection(Request $request){
      Section::storeSection($request);
      return back()->with('message','add a new section successfully');
  }

    public function manageSection(){
        return view('admin.section.manage_section',
            ['sections'=> Section::all()
            ]);

    }
    public function editSection($section_id){
        return view('admin.section.edit_section',
            ['section'=> Section::find($section_id)
            ]);

    }
    public function updateSection(Request $request){

          Section::storeSection($request);
          return redirect('/manage-section')->with('message','update section successfully');

    }
}
