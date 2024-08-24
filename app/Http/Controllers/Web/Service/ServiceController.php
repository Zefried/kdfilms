<?php

namespace App\Http\Controllers\Web\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceEnq;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function enquirySubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'show_reels_link' => 'required|string|max:100',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'nullable|email|max:100',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:400',
            ]
        );

        $contact = new ServiceEnq();
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->city = $request->city;
        $contact->category = $request->category;
        $contact->link = $request->show_reels_link;
        $contact->email = $request->email;
        $contact->message = $request->message;

        if ($contact->save()) {
            return back()->with('message', "We will contact you soon!!");
        } else {
            return back()->with('error', "Please try again!!!!");
        }
    }
}
