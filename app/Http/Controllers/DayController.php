<?php

namespace App\Http\Controllers;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index()
    {
        return view('_day');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(Day::create($input))
        {
            return redirect()->back()->with('success', 'Database Saved');
        }else{
            return redirect()->back()->with('error', 'Something error');
        }
    }

}
