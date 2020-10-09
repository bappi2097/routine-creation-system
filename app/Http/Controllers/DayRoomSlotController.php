<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\DayRoomSlot;
use App\Models\Room;
use App\Models\Slot;
use Illuminate\Http\Request;

class DayRoomSlotController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'room' => ['required', 'string', 'max:10'],
            'days' => ['nullable', 'array'],
            'slots' => ['nullable', 'array']
        ]);

        $slots = $request->slots ? Slot::whereIn('title', $request->slots)->get()->map(function ($slot) {
            return [
                'title' => $slot->title,
                'start' => $slot->start,
                'end' => $slot->end,
            ];
        })->all() : Slot::all()->map(function ($slot) {
            return [
                'title' => $slot->title,
                'start' => $slot->start,
                'end' => $slot->end,
            ];
        })->all();

        $days = $request->days ?: Day::pluck('day')->all();
        foreach ($slots as $slot) {
            foreach ($days as $day) {
                DayRoomSlot::updateOrCreate([
                    'room' => $request->room,
                    'room_type' => Room::where('number', $request->room)->pluck('type')->first(),
                    'day' => $day,
                    'slot' => $slot['title']
                ], [
                    'start' => $slot['start'],
                    'end' => $slot['end']
                ]);
            }
        }
        return redirect()->back()->with('success', 'Database Saved');
    }
}
