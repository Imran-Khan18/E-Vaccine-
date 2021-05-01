<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
		return view('backend.registrations')->with(['view' => 'registrations']);
		//return view('backend.registrations');
    }
    public function register(Request $request)
    {
    	$validator = $request->validate([
			'email' => 'required|email|unique',
			'contact' => 'required'
		]);
		
        Registration::create($request->only(["name", "father_name", "mother_name", "dob", "contact", "nid", "email"]));
        return response("OK");
    }

    public function registrations()
    {
        $registrations = Registration::all();
        //$registrations = Registration::all()->sortByDesc("id");
        return response()->json($registrations);
    }

    public function delete(Request $request)
    {
        $registrationId = $request["registrationId"];
        Registration::where('id', $registrationId)->delete();
        return response()->json(['status' => 200]);
    }
}
