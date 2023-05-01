<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bloodrequest>
 */
class BloodrequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'fname' => fake()->name(),
             
                
                'contact' => fake()->phoneNumber(),
                'bgroup'=>fake()->randomElement(["A-","A+","B-","B+"]),
                'email'=> fake()->email(),
                "note"  => Str::random(5),
    
                
    
    
    
    
            ];
      
    }
}
