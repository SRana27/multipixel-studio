<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactForm(Request $request)
    {

        Contact::storeMessage($request);
        return back();

    }
}
