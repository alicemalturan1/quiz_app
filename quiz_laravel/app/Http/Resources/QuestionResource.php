<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Questions */
class QuestionResource extends JsonResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'quiz_id'    => $this->quiz_id,
            'quiz'       => new QuizResource($this->whenLoaded('quiz')),
            'question'   => $this->question,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'answers'    => AnswerResource::collection($this->whenLoaded('answers')),
        ];
    }
}
