<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'code' => 'bg-gray-400'
        ]);
        Color::create([
            'code' => 'bg-gray-200'
        ]);
        Color::create([
            'code' => 'bg-blue-400'
        ]);
        Color::create([
            'code' => 'bg-yellow-400'
        ]);
        Color::create([
            'code' => 'bg-yellow-200'
        ]);
        Color::create([
            'code' => 'bg-green-400'
        ]);
        Color::create([
            'code' => 'bg-red-200'
        ]);
        Color::create([
            'code' => 'bg-green-200'
        ]);
        Color::create([
            'code' => 'bg-orange-400'
        ]);
        Color::create([
            'code' => 'bg-teal-400'
        ]);
        Color::create([
            'code' => 'bg-pink-400'
        ]);
        Color::create([
            'code' => 'bg-purple-400'
        ]);
    }
}
