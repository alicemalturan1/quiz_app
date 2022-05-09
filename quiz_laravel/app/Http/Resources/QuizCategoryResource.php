<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\QuizCategories */
class QuizCategoryResource extends JsonResource
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
            'name'       => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'quizzes'    => QuizResource::collection($this->whenLoaded('quizzes')),
            $this->mergeWhen($this->quizzes_count, [
                "quizzes_count" => $this->quizzes_count,
            ]),
        ];
    }
}
