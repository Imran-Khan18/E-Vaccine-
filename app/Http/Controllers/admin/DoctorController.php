<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    public function view()
    {
		return view('backend.doctors.view')->with(['view' => 'doctors']);
		//return view('backend.doctors.view');
    }

    public function add()
    {
		return view('backend.doctors.add')->with(['view' => 'add_doctors']);
        //return view('backend.doctors.add');
    }

    public function save_doctor(Request $request)
    {
		$validator = $request->validate([
			'name' => 'required',
			'speciality' => 'required'
		]);
        $inputs = $request->only(['name', 'speciality']);
        if($request->has('id'))
        {
            $doctor = Doctor::find($request->id);
            $doctor->update($inputs);

            return response()->json($doctor);
        }
        Doctor::create($inputs);

		return redirect()->back()->with('success', 'Doctor added successfully'); 
    }

    public function all_doctors()
    {
        $doctors = Doctor::all();
        return response()->json($doctors);
    }

    public function edit()
    {

    }

    public function delete(Request $request)
    {
        $doctorId = $request["doctorId"];
        Doctor::where('id', $doctorId)->delete();
        return response()->json(['status' => 200]);
    }
}
