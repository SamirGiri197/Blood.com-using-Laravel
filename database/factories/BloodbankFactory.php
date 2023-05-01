<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bloodbank>
 */
class BloodbankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(["Nepal Redcross","Biratnagar Bloodbank","Youth Bloodbank","Jay Bloodbank"]),

            'registration_number'=>fake()-> randomElement(["123-234","987-775","336-770","777-785"]),
                
            'contact_number' => fake()->phoneNumber(),
            
            'address'=> fake()->randomElement(["Itahari","Biratnagar","Kathmandu","Pokhara"]),
        ];
    }
}
