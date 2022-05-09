<?php

namespace App\Services;

use App\Http\Requests\GetQuizzesRequest;
use App\Models\Quizzes;
use App\Http\Requests\GetQuizByIdRequest;
use App\Http\Requests\GetQuestionByIdRequest;
use App\Models\Questions;
use Illuminate\Support\Arr;
use App\Http\Requests\GetCategoriesByIdRequest;
use App\Models\QuizCategories;
use App\Http\Requests\GetCategoriesRequest;

class QuizService
{
    public function getQuizzes(GetQuizzesRequest $request)
    {
        $query = Quizzes::query();

        if ((bool) $request->get("with_category") === true) {
            $query = $query->with([
                "category" => function ($q) use ($request) {
                    if ((bool) $request->get("with_quiz_count") === true) {
                        $q->withCount("quizzes");
                    }
                },
            ]);
        }
        return $query->get();
    }

    public function getQuizById(GetQuizByIdRequest $request)
    {
        $data = $request->validated();

        $query = Quizzes::with(["questions" => function ($q) use ($request) {

            if ((bool) $request->get("random_questions")) {
                $q->inRandomOrder();
            }

            if ((bool) $request->get("with_answers")) {
                $q->with(["answers" => function ($qq) use ($request) {
                    if ((bool) $request->get("random_answers")) {
                        $qq->inRandomOrder();
                    }
                }]);
            }

        }]);

        return $query->find((int) $data["id"]);
    }

    public function getQuestionById(GetQuestionByIdRequest $request)
    {
        $data = $request->validated();

        if (!Arr::exists($data, "with_answers")) {
            // with_answer gonderilmezse varsayilan olarak answerleri getiriyoruz.
            $data = Arr::add($data, "with_answers", 1);
        }

        $query = Questions::query();

        if ((bool) $data["with_answers"]) {
            $query = $query->with("answers");
        }

        return $query->find((int) $data["id"]);
    }

    public function getCategoryById(GetCategoriesByIdRequest $request)
    {
        $data = $request->validated();

        if (!Arr::exists($data, "with_quizzes")) {
            // with_quizzes gonderilmezse varsayilan olarak quizleri getiriyoruz.
            $data = Arr::add($data, "with_quizzes", 1);
        }

        $query = QuizCategories::query();

        if ((bool) $data["with_quizzes"]) {
            $query = $query->with("quizzes");
        }

        return $query->find((int) $data["id"]);
    }

    public function getCategories(GetCategoriesRequest $request)
    {
        $data = $request->validated();

        if (!Arr::exists($data, "with_quizzes")) {
            // with_quizzes gonderilmezse varsayilan olarak quizleri getiriyoruz.
            $data = Arr::add($data, "with_quizzes", 1);
        }

        $query = QuizCategories::query();

        if ((bool) $request->get("random_categories")) {
            $query->inRandomOrder();
        }

        if ((bool) $request->get("with_quizzes")) {
            $query->with(["quizzes" => function ($q) use ($request) {
                if ((bool) $request->get("random_quizzes")) {
                    $q->inRandomOrder();
                }
            }]);
        }

        return $query->get();
    }
}
