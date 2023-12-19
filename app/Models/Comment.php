<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public static $comment, $image, $imageName, $imageUrl, $directory, $status;

    public static function storeComment($request)
    {
        if ($request->comment_id) {
            self::$comment = Comment::find($request->comment_id);
        } else {

            self::$comment = new Comment();

        }

        self::$comment->name = $request->name;
        self::$comment->description = $request->description;
        if ($request->image) {
            if (file_exists(self::$comment->image)) {
                unlink(self::$comment->image);
            }
            self::$comment->image = self::saveImage($request);
        }
        self::$comment->status = $request->status;
        self::$comment->save();

    }



    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = 'comment-' . rand(0,100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/comment-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }
    public static function updateStatus($comment_id)
    {
        self::$status = Comment::find($comment_id);
        if (self::$status->status == 1) {
            self::$status->status = 2;

        } else {
            self::$status->status = 1;
        }
        self::$status->save();
    }


    public static function comment_delete($request)
    {
        self::$comment = Comment::find($request->comment_id);
        if(self::$comment->image){
            if(file_exists(self::$comment->image)){
                unlink(self::$comment->image) ;
            }
        }
        self::$comment->delete();
    }

}
