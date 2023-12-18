<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    public static $carousel, $image, $imageName, $imageUrl, $directory, $status;

    public static function storeCarousel($request)
    {
        if ($request->carousel_id) {
            self::$carousel = Carousel::find($request->carousel_id);
        } else {

            self::$carousel = new Carousel();

        }

        self::$carousel->title = $request->title;
        self::$carousel->description = $request->description;
        if ($request->image) {
            if (file_exists(self::$carousel->image)) {
                unlink(self::$carousel->image);
            }
            self::$carousel->image = self::saveImage($request);
        }
        self::$carousel->status = $request->status;
        self::$carousel->save();

    }



    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = 'carousel-' . rand(0,100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/carousel-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }
    public static function updateStatus($carousel_id)
    {
        self::$status = Carousel::find($carousel_id);
        if (self::$status->status == 1) {
            self::$status->status = 2;

        } else {
            self::$status->status = 1;
        }
        self::$status->save();
    }


    public static function Carousel_delete($request)
    {
        self::$carousel = Carousel::find($request->carousel_id);
        if(self::$carousel->image){
            if(file_exists(self::$carousel->image)){
                unlink(self::$carousel->image) ;
            }
        }
        self::$carousel->delete();
    }

}
