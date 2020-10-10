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
        $this->validate($request, [
            'days' => ['required', 'array']
        ]);

        $input = [
            'days' => $request->days
        ];

        $day = new Day();

        if ($day->store($input)) {
            return redirect()->back()->with('success', 'Successfully Saved');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
