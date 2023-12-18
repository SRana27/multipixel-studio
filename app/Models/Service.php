<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public static $service, $image, $imageName, $imageUrl, $directory, $status;

    public static function storeService($request)
    {
        if ($request->service_id) {
            self::$service = Service::find($request->service_id);
        } else {

            self::$service = new Service();

        }
        self::$service->service_name = $request->service_name;
        self::$service->description = $request->description;
        if ($request->image) {
            if (file_exists(self::$service->image)) {
                unlink(self::$service->image);
            }
            self::$service->image = self::saveImage($request);
        }
        self::$service->status = $request->status;
        self::$service->save();

    }



    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = 'service-' . rand(0,100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/service-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }
    public static function updateStatus($service_id)
    {
        self::$status = Service::find($service_id);
        if (self::$status->status == 1) {
            self::$status->status = 2;

        } else {
            self::$status->status = 1;
        }
        self::$status->save();
    }


    public static function service_delete($request)
    {
        self::$service = Service::find($request->service_id);
        if(self::$service->image){
            if(file_exists(self::$service->image)){
                unlink(self::$service->image) ;
            }
        }
        self::$service->delete();
    }
}
