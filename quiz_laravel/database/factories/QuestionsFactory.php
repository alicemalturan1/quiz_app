<?php

namespace Database\Factories;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionsFactory extends Factory
{
    protected $model = Questions::class;

    public function definition(): array
    {
        return [
            'quiz_id'    => 1,
            'question'   => $this->faker->unique()->sentence(12),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
