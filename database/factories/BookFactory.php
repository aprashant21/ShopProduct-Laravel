<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

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
        'numpages' => $this->faker->numberBetween($min = 100, $max = 1000),
        'imagebook' => $this->faker->imageUrl($width = 200, $height = 200),
        'created_at'=> $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'updated_at'=> $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s')

        ];
    }
}
