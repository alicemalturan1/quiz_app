<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getQuizs', [\App\Http\Controllers\APIController::class, 'getQuizs']);
Route::get('/getQuestions/{quiz_id}', [\App\Http\Controllers\APIController::class, 'getQuestions']);
Route::get('/getAnswers/{question_id}', [\App\Http\Controllers\APIController::class, 'getAnswers']);
Route::get('/getQuestionsAndAnswers/{quiz_id}', [\App\Http\Controllers\APIController::class, 'getQuestionAndAnswers']);
Route::get('/getQuizsAndCategories/', [\App\Http\Controllers\APIController::class, 'getQuizsAndCategories']);
