<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.home.index',[
            'messages'=>Contact::where('status',0)->get(),
            'active_services'=>Service::where('status',1)->get(),
        ]);
     }



}
