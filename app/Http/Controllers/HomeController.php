<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;

class HomeController extends Controller
{
    public function home() {

        $data['view'] = 'home';
        $data['doctors'] = Doctor::all();
        $data['departments'] = Department::all();
        return view('home')->with($data);
    }

    public function about() {
        return view('about')->with(['view' => 'about']);
    }

    public function dailyInfo() {


        $myData = file_get_contents('https://corona.lmao.ninja/v2/countries/bd');

        $myData = json_decode($myData,true);

        $data['covid_info_bd'] = $myData;
        $data['view'] = 'daily-info';

        // echo '<pre>';
        // print_r($myData);
        // exit();

        return view('daily-info')->with($data);
    }

    public function doctorsNear() {
        return view('doctors-near')->with(['view' => 'doctors-near']);
    }

    public function contactUs() {
        return view('contact-us')->with(['view' => 'contact-us']);
    }

    public function hospitalizeService() {

        $data['ambulance'] = Ambulance::all();
        $data['view'] = 'hospitalize-service';
        return view('hospitalize-service')->with($data);
    }

    public function vaccineService() {
        return view('vaccine-service')->with(['view' => 'vaccine-service']);
    }

	public function ambulenceService() {
        $data['ambulance'] = Ambulance::all();
        $data['view'] = 'ambulence-service';
        //echo '<pre>';  print_r($data['ambulance']);  exit();
        return view('ambulence-service')->with($data);
        //return view('backend.ambulance-requests')->with(['view' => 'ambulance-requests']);
        //return view('backend.ambulance-requests');
        //return view('ambulence-service')->with(['view' => 'ambulence-service']);
    }

    public function gravaryService() {
        return view('gravary-service')->with(['view' => 'gravary-service']);
    }
}
