<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\DayRoomSlot;
use App\Models\Room;
use App\Models\Slot;
use Illuminate\Database\Seeder;

class DayRoomSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = Day::pluck('day')->all();
        $slots = Slot::all()->map(function ($slot) {
            return ['title' => $slot->title, 'start' => $slot->start, 'end' => $slot->end,];
        })->all();
        $rooms = Room::all();
        foreach ($rooms as $room) {
            foreach ($days as $day) {
                foreach ($slots as $slot) {
                    DayRoomSlot::create([
                        'room' => $room->number,
                        'room_type' => $room->type,
                        'day' => $day,
                        'slot' => $slot['title'],
                        'start' => $slot['start'],
                        'end' => $slot['end']
                    ]);
                }
            }
        }
    }
}
