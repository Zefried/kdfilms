<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactList(Request $request)
    {
        $contacts = Contacts::latest()->get();

        return view('admin.contacts.list', compact('contacts'));
    }

    public function destroyContact($id = null)
    {
        $contact = Contacts::find($id);
        if ( $contact && $contact->delete()) {
            
            return back()->with('message', "Mail Deleted Successfully");
        } else {
            return back()->with('error', "Mail Deletation failed");
        }
    }
}
