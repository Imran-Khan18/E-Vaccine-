<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\AmbulanceRequest;

class DashboardController extends Controller
{
    public function index()
    {

        $data['view'] = 'home';
        $data['registration'] = Registration::all()->count();
        $data['appoinment'] = Appointment::all()->count();
        $data['contact'] = Contact::all()->count();
        $data['ambulance_request'] = AmbulanceRequest::all()->count();

        return view('backend.layouts.home')->with($data);
		//return view('backend.layouts.home');
    }
}
