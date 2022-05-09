<?php

namespace Database\Factories;

use App\Models\Answers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnswersFactory extends Factory
{
    protected $model = Answers::class;

    public function definition(): array
    {
        return [
            'question_id' => 1,
            'answer'      => $this->faker->sentence(2),
            'is_true'     => false,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ];
    }
}
