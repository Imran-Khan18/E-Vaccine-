<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function make_contact(Request $request)
    {
        Contact::create($request->only(["name", "email", "subject", "message"]));
        return response("OK");
    }

    public function index()
    {
		return view('backend.contacts')->with(['view' => 'contacts']);
		//return view('backend.contacts');
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function delete(Request $request)
    {
        $contactId = $request["contactId"];
        Contact::where('id', $contactId)->delete();
        return response()->json(['status' => 200]);
    }
}
