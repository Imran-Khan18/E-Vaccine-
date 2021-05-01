<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'first_date', 'second_date', 'preferred_time', 'certificate', 'appointment_for'];

    protected $guarded=[];

}
