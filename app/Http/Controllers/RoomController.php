<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Room;
use App\Models\Slot;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('_room', [
            'rooms' => Room::all(),
            'days' => Day::all(),
            'slots' => Slot::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => ['required', 'string', 'max:8'],
            'type' => ['required', 'boolean']
        ]);
        if (Room::updateOrCreate(['number' => $request->number], ['type' => $request->type])) {
            return redirect()->back()->with('success', 'Database Saved');
        } else {
            return redirect()->back()->with('error', 'Something error');
        }
    }
}
