<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuizResource;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\GetQuizzesRequest;
use App\Http\Requests\GetQuizByIdRequest;
use App\Services\QuizService;
use App\Http\Requests\GetQuestionByIdRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\QuizCategoryResource;
use App\Http\Requests\GetCategoriesByIdRequest;
use App\Http\Requests\GetCategoriesRequest;

/**
 * @group Quiz Endpoints
 * Api for quizzes
 */
class APIController extends Controller
{

    /**
     * @var QuizService
     */
    private $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    /**
     * Get All Quizzes
     */
    public function getQuizzes(GetQuizzesRequest $request): JsonResponse
    {
        $result = QuizResource::collection($this->quizService->getQuizzes($request));

        return response()->json($result);
    }

    /**
     * Get Quiz by Id
     * @urlParam id integer required The ID of the quiz
     * @bodyParam id integer required The ID of the quiz
     */
    public function getQuizById(GetQuizByIdRequest $request): JsonResponse
    {
        $result = $this->quizService->getQuizById($request);

        if (!$result) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return response()->json(new QuizResource($result));
    }

    /**
     * Get Question by Id
     * @urlParam id integer required The ID of the question
     * @bodyParam id integer required The ID of the question
     */
    public function getQuestionById(GetQuestionByIdRequest $request): JsonResponse
    {
        $result = $this->quizService->getQuestionById($request);

        if (!$result) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return response()->json(new QuestionResource($result));
    }

    /**
     * Get Category By Id
     * @urlParam id integer required The ID of the quiz category
     * @bodyParam id integer required The ID of the quiz category
     */
    public function getCategoryById(GetCategoriesByIdRequest $request): JsonResponse
    {
        $result = $this->quizService->getCategoryById($request);

        if (!$result) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return response()->json(new QuizCategoryResource($result));
    }

    /**
     * Get All Categories
     */
    public function getCategories(GetCategoriesRequest $request): JsonResponse
    {
        $result = QuizCategoryResource::collection($this->quizService->getCategories($request));

        return response()->json($result);
    }

}
