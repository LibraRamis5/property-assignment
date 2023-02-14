<?php

namespace Database\Factories;

use App\Models\RequestTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestTimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestTime::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $isEven = rand(0, 1);
        $route = $isEven ? '/api/v1/even' : '/api/v1/prime';
        return [
            'route' => $route,
            'time' => rand(100, 450),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
