<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public static $about, $image, $imageName, $imageUrl, $directory;

    public static function storeAbout($request)
    {
        if ($request->about_id) {
            self::$about = About::find($request->about_id);
        } else {

            self::$about = new About();

        }
        self::$about->section_name        = $request->section_name;
         self::$about->title              = $request->title;
        self::$about->description         = $request->description;
        if ($request->image_top) {
            if (file_exists(self::$about->image_top)) {
                unlink(self::$about->image_top);
            }
            self::$about->image_top = self::saveImageTop($request);
        }
        if ($request->image_down) {
            if (file_exists(self::$about->image_down)) {
                unlink(self::$about->image_down);
            }
            self::$about->image_down      = self::saveImageDown($request);
        }
        self::$about->save();

    }

    private static function saveImageTop($request)
    {
        self::$image = $request->file('image_top');
        self::$imageName = 'About-image' . rand(0, 100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/About-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    private static function saveImageDown($request)
    {
        self::$image = $request->file('image_down');
        self::$imageName = 'About-image' . rand(0, 100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/About-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function about_delete($request)
    {
        self::$about = About::find($request->about_id);
        if(self::$about->image_top){
            if(file_exists(self::$about->image_top)){
                unlink(self::$about->image_top) ;
            }
        }
        if(self::$about->image_down){
            if(file_exists(self::$about->image_down)){
                unlink(self::$about->image_down) ;
            }
        }
        self::$about->delete();
    }

}
