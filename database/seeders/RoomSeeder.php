<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'number' => '304AB',
            'type' => false
        ]);
        Room::create([
            'number' => '305AB',
            'type' => true
        ]);
        // Room::create([
        //     'number' => '306AB',
        //     'type' => true
        // ]);
        Room::create([
            'number' => '404AB',
            'type' => false
        ]);
        Room::create([
            'number' => '405AB',
            'type' => false
        ]);
        Room::create([
            'number' => '406AB',
            'type' => true
        ]);
        Room::create([
            'number' => '501AB',
            'type' => true
        ]);
        Room::create([
            'number' => '502AB',
            'type' => true
        ]);
        Room::create([
            'number' => '504AB',
            'type' => true
        ]);
        Room::create([
            'number' => '601AB',
            'type' => true
        ]);
        Room::create([
            'number' => '604AB',
            'type' => true
        ]);
        Room::create([
            'number' => '605AB',
            'type' => false
        ]);
        Room::create([
            'number' => '607AB',
            'type' => true
        ]);
        // Room::create([
        //     'number' => '506MB',
        //     'type' => false
        // ]);
        // Room::create([
        //     'number' => '507MB',
        //     'type' => false
        // ]);
    }
}
