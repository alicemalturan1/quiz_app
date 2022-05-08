<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\QuizCategoires;
use App\Models\Quizs;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getQuizs(){
        return response()->json(Quizs::all());
    }
    public function getQuestions($quiz_id){
        return response()->json(Questions::where('quiz_id',$quiz_id)->get());
    }
    public function getAnswers($question_id){
        return response()->json(Answers::where('question_id',$question_id)->get());
    }
    public function getQuestionAndAnswers($quiz_id){
        $questions = Questions::orderByRaw('RAND()')->where('quiz_id',$quiz_id)->get();
        $resp = [];
        foreach ($questions as $item){
            array_push($resp,[
                'answers'=>Answers::orderByRaw('RAND()')->where('question_id',$item->id)->get(),
                'question'=>$item
            ]);
        }
        return response()->json($resp);
    }
    public function getQuizsAndCategories(){
        $categories = QuizCategoires::orderByRaw('RAND()')->get();
        $resp = [];
        foreach ($categories as $item){
            array_push($resp,[
                'quizs'=>Quizs::where('category_id',$item->id)->get(),
                'category'=>$item
            ]);
        }
        return response()->json($resp);
    }

}
