<?php

namespace App\Http\Controllers;

use App\Models\DayRoomSlot;
use Illuminate\Http\Request;

class DayRoomSlotController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        if (DayRoomSlot::updateOrCreate($input)) {
            return redirect()->back()->with('success', 'Database Saved');
        } else {
            return redirect()->back()->with('error', 'Something error');
        }
    }
}
