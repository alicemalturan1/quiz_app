<?php

namespace Database\Factories;

use App\Models\QuizCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuizCategoriesFactory extends Factory
{
    protected $model = QuizCategories::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->unique()->randomElement(["Matematik", "Fizik", "Kimya", "Edebiyat", "Müzik", "Genel Kültür", "Diğer"]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
