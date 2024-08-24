<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceEnq;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceEnqList(Request $request)
    {
        $service_enqs = ServiceEnq::latest()->get();

        return view('admin.service_enqs.list', compact('service_enqs'));
    }

    public function destroyServiceEnq($id = null)
    {
        $service_enqs = ServiceEnq::find($id);
        if ( $service_enqs && $service_enqs->delete()) {
            
            return back()->with('message', "Enquiry Deleted Successfully");
        } else {
            return back()->with('error', "Enquiry Deletation failed");
        }
    }
}
