<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'project_type_id' => $this->faker->numberBetween(1, 6),
            'name_en' => $name = $this->faker->company,
            'name_bn' => $name,
            'slug' => Str::slug($name),
            'client_name_en' => $client = $this->faker->name,
            'client_name_bn' => $client,
            'address_en' => $address = $this->faker->address,
            'address_bn' => $address,
            'area_en' => $area = $this->faker->numberBetween(1000, 2000),
            'area_bn' => $area,
            'cost_en' => $cost = $this->faker->numberBetween(500000, 2000000),
            'cost_bn' => $cost,
            'description_en' => $description = $this->faker->text,
            'description_bn' => $description,
            'cover_image' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg']),
            'started_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->randomElement(['completed', 'on going']),
        ];
    }
}
