<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppointmentController extends Controller
{
    public function make_appointment(Request $request) {
        $inputs = $request->only(['name', 'email', 'phone', 'appointment_date', 'department_id', 'doctor_id', 'comment']);

        $date2 = date_create($inputs['appointment_date']);
        $date_new = date_format($date2,"Y-m-d");
        $inputs['appointment_date'] = $date_new;

        Appointment::create($inputs);
        return "OK";
    }

    public function index()
    {
		return view('backend.appointments')->with(['view' => 'appointments']);
		//return view('backend.appointments');
    }

    public function appointments()
    {
        $appointments = Appointment::with('doctor', 'department')->get();
        return response()->json($appointments);
    }

    public function delete(Request $request)
    {
        $appointmentId = $request["appointmentId"];
        Appointment::where('id', $appointmentId)->delete();
        return response()->json(['status' => 200]);
    }
}
