<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grave extends Model
{
    use HasFactory;

    protected $fillable = ['hospital', 'patient', 'graveyard'];

    protected $guarded=[];

}
