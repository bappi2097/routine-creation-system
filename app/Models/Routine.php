<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function routines()
    // {
    //     $routines = App\Models\Routine::all();
    //     return $routines;
    // }
}
