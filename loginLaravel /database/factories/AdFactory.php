<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(2,true),
            'category'=> $this->faker->sentence(2,true),
            'description'=> $this->faker->paragraph(),
            'price'=> $this->faker->randomNumber($nbDigits=4),
            'location'=> $this->faker->sentence(2,true),
        ];
    }
}
