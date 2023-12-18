<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    public static $member, $image, $imageName, $imageUrl, $directory, $status;

    public static function storeMember($request)
    {
        if ($request->member_id) {
            self::$member = TeamMember::find($request->member_id);
        } else {

            self::$member = new TeamMember();

        }
        self::$member->member_name = $request->member_name;
        self::$member->designation = $request->designation;
        if ($request->image) {
            if (file_exists(self::$member->image)) {
                unlink(self::$member->image);
            }
            self::$member->image = self::saveImage($request);
        }
        self::$member->save();

    }



    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = 'member-' . rand(0,100) . self::$image->getClientOriginalName();
        self::$directory = 'admin/upload/member-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;

    }

    public static function delete_member($request)
    {
        self::$member = TeamMember::find($request->member_id);
        if(self::$member->image){
            if(file_exists(self::$member->image)){
                unlink(self::$member->image) ;
            }
        }
        self::$member->delete();
    }
}
