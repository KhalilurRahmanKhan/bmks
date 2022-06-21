<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Slider::factory(10)->create();

        \App\Models\Slider::create([
            'slide1' => 'slide1.png',
            'slide2' => 'slide2.png',
            'slide3' => 'slide3.png',
        ]);

        \App\Models\Notice::create([
            'notice' => 'This is testing notice',
          
        ]);
        \App\Models\User::create([
            'username' => 'admin',
            'mobile' => '0154823536',
            'password' => Hash::make('123456'),
            'role' => 'admin',
          
        ]);
    }
}
