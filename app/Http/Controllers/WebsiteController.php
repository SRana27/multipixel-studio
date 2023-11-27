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
    public function blog()
    {
        return view('website.blog.index');
    }

  public function comment()
   {
    return view('website.client-comment.index');
  }
    public function team()
    {
        return view('website.team.index');
    }
}
