<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addMember(){
        return view('admin.team.add_new_member');
    }

    public function manageMember()
    {
        return view('admin.team.manage_member',[
            'members'=>TeamMember::all()
        ]);
    }
    public function saveMember(Request $request)
    {
        TeamMember::storeMember($request);
        return back()->with('message','add new member successfully');

    }
    public function editMember($member_id)
    {
        return view('admin.team.edit_member',[
            'member'=>  TeamMember::find($member_id)
        ]);
    }
    public function updateMember(Request $request)
    {
        TeamMember::storeMember($request);
        return redirect('/manage-member')->with('message','member information update successfully');
    }

    public function  deleteMember(Request $request)
    {
        TeamMember::delete_member($request);
        return redirect('/manage-member')->with('message','member information delete successfully');

    }
}
