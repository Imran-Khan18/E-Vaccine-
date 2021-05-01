<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbulanceRequest extends Model
{
    use HasFactory;

    protected $table = "ambulance_requests";

    protected $fillable = ["name", "age", "phone", "address", "contact", "payment"];
}
