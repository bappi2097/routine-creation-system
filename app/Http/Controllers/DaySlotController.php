<?php

namespace App\Http\Controllers;
use App\Models\DaySlot;
use Illuminate\Http\Request;

class DaySlotController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        if(DaySlot::updateOrCreate($input))
        {
            return redirect()->back()->with('success', 'Database Saved');
        }else{
            return redirect()->back()->with('error', 'Something error');
        }
    }
}
