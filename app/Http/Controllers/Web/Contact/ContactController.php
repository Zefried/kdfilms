<?php

namespace App\Http\Controllers\Web\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactSubmit(Request $request)
    {

      

        $contact = new Contacts();
        $contact->name = $request->name;
        $contact->mobile = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        if ($contact->save()) {
            return back()->with('message', "We will contact you soon!!");
        } else {
            return back()->with('error', "Please try again!!!!");
        }
    }

    // public function refreshCaptcha()
    // {
    //     return response()->json(['captcha' => captcha_img()]);
    // }
}
