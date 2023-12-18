<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.add_new_Blog');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage_Blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function saveBlog(Request $request)
    {
        Blog::storeBlog($request);
        return back()->with('message','add new Blog successfully');

    }
    public function editBlog($Blog_id)
    {
        return view('admin.blog.edit_Blog',[
            'blog'=>  Blog::find($Blog_id)
        ]);
    }
    public function updateBlog(Request $request)
    {
        Blog::storeBlog($request);
        return redirect('/manage-blog')->with('message','Blog information update successfully');
    }

    public function  deleteBlog(Request $request)
    {
        Blog::delete_Blog($request);
        return redirect('/manage-blog')->with('message','Blog information delete successfully');

    }
}
