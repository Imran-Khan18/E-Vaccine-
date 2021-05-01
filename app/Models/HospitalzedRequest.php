<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalzedRequest extends Model
{
    use HasFactory;

    protected $table = "hospitalzed_request";

    protected $fillable = ["hospital", "doctor", "cabin"];
}
