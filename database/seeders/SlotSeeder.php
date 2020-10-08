<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slot::create([
            'title' => 'A',
            'start' => '08:30',
            'end' => '10:00'
        ]);
        Slot::create([
            'title' => 'B',
            'start' => '10:00',
            'end' => '11:30'
        ]);
        Slot::create([
            'title' => 'C',
            'start' => '11:30',
            'end' => '13:00'
        ]);
        Slot::create([
            'title' => 'D',
            'start' => '13:00',
            'end' => '14:30'
        ]);
        Slot::create([
            'title' => 'E',
            'start' => '14:30',
            'end' => '16:00'
        ]);
        Slot::create([
            'title' => 'F',
            'start' => '16:00',
            'end' => '17:30'
        ]);
    }
}
