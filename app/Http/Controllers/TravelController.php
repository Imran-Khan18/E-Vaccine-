<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TravelController extends Controller
{
    public function request_travel(Request $request) {
        $inputs = $request->only(['name', 'email', 'first_date', 'second_date', 'preferred_time', 'certificate', 'appointment_for']);

        $date1 = date_create($inputs['first_date']);
        $date_new = date_format($date1,"Y-m-d");
        $inputs['first_date'] = $date_new;

        $date2 = date_create($inputs['second_date']);
        $date_new = date_format($date2,"Y-m-d");
        $inputs['second_date'] = $date_new;

        Travel::create($inputs);
        return "OK";
    }

}
