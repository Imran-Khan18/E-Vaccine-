<?php

namespace App\Http\Controllers;

use App\Models\AmbulanceRequest;
use App\Models\HospitalzedRequest;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    public function index()
    {
        return view('backend.ambulance-requests')->with(['view' => 'ambulance-requests']);
		//return view('backend.ambulance-requests');
    }

    public function request_ambulance(Request $request)
    {
        AmbulanceRequest::create($request->only([
            "name",
            "age",
            "phone",
            "address",
            "contact",
            "payment"
        ]));

        return "OK";
    }

    public function request_hospitalzed(Request $request)
    {
        HospitalzedRequest::create($request->only([ "hospital", "doctor", "cabin" ]));

        return "OK";
    }

    public function get_requests()
    {
        $requests = AmbulanceRequest::all();
        return response()->json($requests);
    }

    public function delete(Request $request)
    {
        $ambulanceRequestId = $request["ambulanceRequestId"];
        AmbulanceRequest::where('id', $ambulanceRequestId)->delete();
        return response()->json(['status' => 200]);
    }
}
