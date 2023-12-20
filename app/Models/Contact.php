<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Contact extends Model
{
    use HasFactory;
   public static $message;


    public static function storeMessage($request)
    {
        if ($request->message_id) {
            self::$message = Contact::find($request->message_id);
        } else {

            self::$message = new Contact();

        }
        self::$message->name = $request->name;
        self::$message->email = $request->email;
        self::$message->subject = $request->subject;
        self::$message->message = $request->message;
        self::$message->save();

    }

    public static function message_delete($request)
    {
        self::$message = Contact::find($request->message_id);

        self::$message->delete();
    }

}
