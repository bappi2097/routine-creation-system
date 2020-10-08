<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::create([
            'day' => "Saturday"
        ]);
        Day::create([
            'day' => "Sunday"
        ]);
        Day::create([
            'day' => "Monday"
        ]);
        Day::create([
            'day' => "Tuesday"
        ]);
        Day::create([
            'day' => "Wednesday"
        ]);
        Day::create([
            'day' => "Thursday"
        ]);
    }
}
