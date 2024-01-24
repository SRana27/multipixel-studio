<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Comment;
use App\Models\Section;
use App\Models\Service;
use App\Models\TeamMember;


class WebsiteController extends Controller
{
public function index()
{
    return view('website.home.index',
    [   'carousels' => Carousel::OrderBy('id','desc')->take('2')->where('status',1)->get(),
        'abouts' =>About::OrderBy('id','desc')->take('1')->get(),
        'services'=> Service::orderBy('id','desc')->take('6')->where('status',1)->get(),
        'sections'=>Section::all(),
        'comments'=>Comment::orderBy('id','desc')->take('4')->where('status',1)->get(),
        'blogs'=>Blog::orderBy('id','desc')->take('3')->get(),
        'members'=>TeamMember::all()
    ]);
}
    public function about()
    {
        return view('website.about.index',
        [   'abouts' =>About::OrderBy('id','desc')->take('1')->get(),
            'members'=>TeamMember::all(),
            'sections'=>Section::all()
        ]);
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
        return view('website.project.index',[
        'sections'=>Section::all()]);
    }

    public function contact()
    {
        return view('website.contact.index',[
            'sections'=>Section::all()]);
    }
    public function blog()
    {
        return view('website.blog.index',
        [ 'blogs'=>Blog::orderBy('id','desc')->take('3')->get(),
            'sections'=>Section::all() ]);
    }

     public function comment()
    {
            return view('website.client-comment.index',
            [
                'comments'=>Comment::orderBy('id','desc')->take('4')->where('status',1)->get(),
                'sections'=>Section::all()
            ]);
    }
    public function team()
    {
        return view('website.team.index',[
            'members'=>TeamMember::all(),
            'sections'=>Section::all()
        ]);
    }


}
