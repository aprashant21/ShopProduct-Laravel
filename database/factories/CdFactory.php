<?php

namespace Database\Factories;

use App\Models\Cd;
use Illuminate\Database\Eloquent\Factories\Factory;

class CdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cd::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' =>$this-> faker->sentence,
        'firstname' => $this->faker->firstName,
        'mainname' => $this->faker->lastname,
        'price' => $this->faker->numberBetween($min = 10, $max = 50),
        'playlength' => $this->faker->numberBetween($min = 10, $max = 120),
        'imagecd' => $this->faker->imageUrl($width = 200, $height = 200),
        'created_at'=> $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'updated_at'=> $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
        ];
    }
}
