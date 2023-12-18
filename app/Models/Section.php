<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    static $section;

    public static function storeSection($request){
        if($request->section_id)
            self::$section =Section::find($request->section_id);
        else
            {
               self::$section  =new Section();
           }

        self::$section->section_name     =$request->section_name;
        self::$section->section_title    =$request->section_title;
        self::$section->section_tag      =$request->section_tag;
        self::$section->save();
    }

}
