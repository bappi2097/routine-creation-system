<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function index()
    {
        return view('_routine');
    }
    public function generate()
    {
        dd(true);
        return null;
    }
    public function store()
    {
        $this->generate();
        return null;
    }
}
