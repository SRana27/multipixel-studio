<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
  public function addComment()
  {
      return view('admin.comment.add_new_comment');
  }
    public function saveComment(Request $request)
    {
        Comment::storeComment($request);
        return redirect('/add-comment')->with('message','comment add successfully');
    }

    public function manageComment()
    {
        return view('admin.comment.manage_comment',
            ['comments'=>comment::orderBy('id','desc')->get()]);

    }

    public function editComment($comment_id)
    {
        return view('admin.comment.edit_comment',
            ['comment'=>comment::find($comment_id)]);
    }

    public function updateComment(Request $request)
    {
        comment::storecomment($request);
        return redirect('/manage-comment')->with('message','comment update successfully');
    }


    public function statusUpdate($comment_id)
    {
        comment::updateStatus($comment_id);
        return redirect('/manage-comment')->with('message','comment status update successfully');
    }


    public function deleteComment(Request $request)
    {
        comment::comment_delete($request);
        return redirect('/manage-comment')->with('message','comment delete successfully');
    }

}
