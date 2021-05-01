<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ambulance;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class AdminAmbulanceController extends Controller
{
    public function view()
    {
		return view('backend.ambulances.view')->with(['view' => 'admin_ambulances']);
		//return view('backend.ambulances.view');
    }

    public function add()
    {
		return view('backend.ambulances.add')->with(['view' => 'add_ambulances']);
        //return view('backend.ambulances.add');
    }

    public function save_ambulance(Request $request)
    {
        $inputs = $request->only(['area', 'price']);
        if($request->has('id'))
        {
            $ambulance = Ambulance::find($request->id);
            $ambulance->update($inputs);

            return response()->json($ambulance);
        }
        Ambulance::create($inputs);

        return redirect()->back();
    }

    public function all_ambulances()
    {
        $ambulances = Ambulance::all();
        return response()->json($ambulances);
    }

    public function edit()
    {

    }

    public function delete(Request $request)
    {
        $ambulanceId = $request["ambulanceId"];
        Ambulance::where('id', $ambulanceId)->delete();
        return response()->json(['status' => 200]);
    }
}
