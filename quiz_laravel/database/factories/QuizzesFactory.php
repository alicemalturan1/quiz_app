<?php

namespace Database\Factories;

use App\Models\Quizzes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuizzesFactory extends Factory
{
    protected $model = Quizzes::class;

    public function definition(): array
    {
        return [
            'category_id' => 1,
            'title'       => $this->faker->unique()->sentence(4),
            'description' => $this->faker->sentence(15),
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ];
    }
}
