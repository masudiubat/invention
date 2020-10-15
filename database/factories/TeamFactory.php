<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name,
            'designation' => $this->faker->randomElement(['Site Engineer', 'Project Engineer', 'Project Manageer', 'Designer', 'Architect']),
            'address' => $this->faker->address,
            'mobile' => $this->faker->e164PhoneNumber,
            'emergency_contact_number' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'fb_id' => 'https://www.facebook.com/Invention-Architects-Engineers-211385846102228',
            'linkedin' => $this->faker->word,
        ];
    }
}
