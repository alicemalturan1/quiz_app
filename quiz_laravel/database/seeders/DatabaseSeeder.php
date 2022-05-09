<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\QuizCategories;
use App\Models\Quizzes;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Database\Eloquent\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        QuizCategories::factory()->count(7)
            ->has(Quizzes::factory()->count(10)
                ->has(Questions::factory(20)
                    ->has(Answers::factory()->count(5)
                    )
                )
            )->create();

        $answers = Answers::get();

        $groupedAnswers = $answers->mapToGroups(function ($item, $key) {
            return [$item['question_id'] => $item];
        });

        /** @var Collection $groupedAnswer */
        foreach ($groupedAnswers as $groupedAnswer) {
            $first_answer          = $groupedAnswer[random_int(0, 4)];
            $first_answer->is_true = true;
            $first_answer->save();
        }
    }
}
