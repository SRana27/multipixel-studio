<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Section;
use App\Models\Service;
use App\Models\TeamMember;

class WebsiteController extends Controller
{
public function index()
{
    return view('website.home.index',
    [   'carousels' => Carousel::OrderBy('id','desc')->take('3')->where('status',1)->get(),
        'abouts' =>About::OrderBy('id','desc')->take('1')->get(),
        'services'=> Service::orderBy('id','desc')->take('6')->where('status',1)->get()
    ]);
}
    public function about()
    {
        return view('website.about.index');
    }

    public function service()
    {
        return view('website.service.index',
        [
            'services'=>Service::orderBy('id','desc')->take('6')->where('status',1)->get(),
            'sections'=>Section::all()
        ]);
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
        return view('website.team.index',[
            'members'=>TeamMember::all()
        ]);
    }
}
