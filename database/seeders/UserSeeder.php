<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Asif Khan Shakir',
            'email' => 'asif.swe@diu.edu.bd',
            'password' => bcrypt('secret')
        ]);
    }
}
