<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'
        ];
        Teacher::create([
            'name' => 'Dr. Fokhray Hossain',
            'initial' => 'DFH',
            'off_day' => 'Saturday'
        ]);
        Teacher::create([
            'name' => 'Syed Mizanur Rahman',
            'initial' => 'SMR',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Dr. Sk. Abdul Kader Arafin',
            'initial' => 'AKA',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'Dr.Md. Kamrul Hossain',
            'initial' => 'MKH',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Kaushik Sarker',
            'initial' => 'KS',
            'off_day' => "Wednesday"
        ]);
        Teacher::create([
            'name' => 'M. Khaled Sohel',
            'initial' => 'MKS',
            'off_day' => "Thursday"
        ]);
        Teacher::create([
            'name' => 'K M Imtiaz Uddin',
            'initial' => 'KMIU',
            'off_day' => "Saturday"
        ]);
        Teacher::create([
            'name' => 'Md. Maruf Hassan',
            'initial' => 'MH',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Dr. Md. Mostafijur Rahman',
            'initial' => 'DMR',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'Md. Fahad Bin Zamal',
            'initial' => 'FBZ',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Afsana Begum',
            'initial' => 'Afsana Begum',
            'off_day' => "Wednesday"
        ]);
        Teacher::create([
            'name' => 'Nusrat Jahan',
            'initial' => 'NJ',
            'off_day' => "Thursday"
        ]);
        Teacher::create([
            'name' => 'Syeda Sumbul Hossain Shamma',
            'initial' => 'SSH',
            'off_day' => "Saturday"
        ]);
        Teacher::create([
            'name' => 'Md. Anwar Hossen',
            'initial' => 'MAH',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Tapushe Rabaya Toma',
            'initial' => 'TRT',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'Asif Khan Shakir',
            'initial' => 'AKS',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Md. Shohel Arman',
            'initial' => 'MSA',
            'off_day' => "Wednesday"
        ]);
        Teacher::create([
            'name' => 'Mushfiqur Rahman',
            'initial' => 'MR',
            'off_day' => "Thursday"
        ]);
        Teacher::create([
            'name' => 'Khalid Been MD. Badruzzaman',
            'initial' => 'KBB',
            'off_day' => "Saturday"
        ]);
        Teacher::create([
            'name' => 'Fatama Binta Rafiq',
            'initial' => 'FBR',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Farhan Anan Himu',
            'initial' => 'FAH',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'MD. Sanzidul Islam',
            'initial' => 'MSI',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Mahmuda Rawnak Jahan',
            'initial' => 'MRJ',
            'off_day' => "Wednesday"
        ]);
        Teacher::create([
            'name' => 'Fatema Tuz - Zohora',
            'initial' => 'FTZ',
            'off_day' => "Thursday"
        ]);
        Teacher::create([
            'name' => 'Hafizul Imran',
            'initial' => 'HI',
            'off_day' => "Saturday"
        ]);
        Teacher::create([
            'name' => 'Mr. Mohammad Salek Parvez',
            'initial' => 'MSP',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Ms. Afroza Akter',
            'initial' => 'MAA',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'Mr. Sayed Farrukh Ahmed',
            'initial' => 'SFA',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Mr. Arif Hassan',
            'initial' => 'MAH_BS',
            'off_day' => "Wednesday"
        ]);
        Teacher::create([
            'name' => 'Mr. Shakil Ahmed',
            'initial' => 'SA',
            'off_day' => "Thursday"
        ]);
        Teacher::create([
            'name' => 'Ridwanullah Yousuf',
            'initial' => 'RY',
            'off_day' => "Saturday"
        ]);

        Teacher::create([
            'name' => 'Mr. Sayed Farrukh Ahmed',
            'initial' => 'AB',
            'off_day' => "Sunday"
        ]);
        Teacher::create([
            'name' => 'Mr. Arif Hassan',
            'initial' => 'FS',
            'off_day' => "Monday"
        ]);
        Teacher::create([
            'name' => 'Mr. Shakil Ahmed',
            'initial' => 'AE',
            'off_day' => "Tuesday"
        ]);
        Teacher::create([
            'name' => 'Ridwanullah Yousuf',
            'initial' => 'TBA',
            'off_day' => "Wednesday"
        ]);

        Teacher::create([
            'name' => 'Ridwanullah Yousuf',
            'initial' => 'RR',
            'off_day' => "Thursday"
        ]);
    }
}
