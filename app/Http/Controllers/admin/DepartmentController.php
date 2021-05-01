<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function view()
    {
        return view('backend.departments.view')->with(['view' => 'departments']);
		//return view('backend.departments.view');
    }

    public function add()
    {
		return view('backend.departments.add')->with(['view' => 'add_departments']);
        //return view('backend.departments.add');
    }

    public function save_department(Request $request)
    {
        $inputs = $request->only(['name', 'department']);
		if($request->has('id'))
        {
            $department = Department::find($request->id);
            $department->update($inputs);

            return response()->json($department);
        }
        Department::create($inputs);

        return redirect()->back();
    }

    public function all_departments()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

    public function edit()
    {

    }

    public function delete(Request $request)
    {
        $departmentId = $request["departmentId"];
        Department::where('id', $departmentId)->delete();
        return response()->json(['status' => 200]);
    }
}
