<?php

namespace App\Http\Controllers;

use App\Models\Grave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GraveController extends Controller
{
    public function request_grave(Request $request) {
        $inputs = $request->only(['hospital', 'patient', 'graveyard' ]);

        Grave::create($inputs);
        return "OK";
    }

}
