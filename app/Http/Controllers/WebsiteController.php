<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
public function index()
{
    return view('website.home.index');
}
    public function about()
    {
        return view('website.about.index');
    }

    public function service()
    {
        return view('website.service.index');
    }

    public function project()
    {
        return view('website.project.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }
}
