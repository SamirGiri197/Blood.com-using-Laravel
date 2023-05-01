<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' =>'sagar Guragain',
            'email' => 'admin@gmail.com',
            'mobile_number'=>'9810472491',
            'password' => Hash::make('123456789'),
            'is_admin' =>true
        ]);
        Admin::create([
            'name' =>'Amir Kc',
            'email' => 'admin1@gmail.com',
            'mobile_number'=>'9810472491',
            'password' => Hash::make('123456789'),
            'is_admin' =>true
        ]);
    }
}
