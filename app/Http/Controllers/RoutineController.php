<?php

namespace App\Http\Controllers;
use App\Models\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function show(Routine $routines)
    {
        return view('_form', [
            'routines' => routine()->showroutine()
        ]);
    }
}
