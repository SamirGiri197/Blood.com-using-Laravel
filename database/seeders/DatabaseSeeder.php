<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bloodrequest;
use App\Models\Hospital;
use App\Models\Bloodbank;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // \App\Models\User::factory(10)->create();

    //     // \App\Models\User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);
       
    // }
    public function run()
    {
        Bloodrequest::factory()->count(10)->create();
        Bloodbank::factory()->count(10)->create();
        Hospital::factory()->count(10)->create();
    //    User::factory()->count(10)->create();
    //    Organization::factory()->count(5)->create();
    //    admin::factory()->count(6)->create();
    //    Job::factory()->count(5)->create();
    //    Programme::factory()->count(6)->create();
    }
}
