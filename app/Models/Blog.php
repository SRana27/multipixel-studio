<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog, $image, $imageName, $imageUrl, $directory, $status;

    public static function storeBlog($request)
    {
        if ($request->blog_id) {
            self::$blog = Blog::find($request->blog_id);
        } else {

            self::$blog = new Blog();

        }
        self::$blog->blog_type = $request->blog_type;
        self::$blog->description = $request->description;
        if ($request->image) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->date  =$request->date;
        self::$blog->save();

    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = 'blog-' . rand(0,10) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }

    public static function delete_blog($request)
    {
        self::$blog = Blog::find($request->blog_id);
        if(self::$blog->image){
            if(file_exists(self::$blog->image)){
                unlink(self::$blog->image) ;
            }
        }
        self::$blog->delete();
    }
}
