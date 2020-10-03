<?php

namespace Database\Factories;

use App\Models\Routine;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoutineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Routine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'semester' => $this->faker->semester,
            'section' => $this->faker->section,
            'semenumber_of_studentster' => $this->faker->number_of_student,
            'courses' => $this->faker->courses,
        ];
    }
}
