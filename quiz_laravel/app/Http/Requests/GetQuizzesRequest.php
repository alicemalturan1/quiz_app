<?php

namespace App\Http\Requests;

class GetQuizzesRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "with_category"       => "boolean",
            "with_category_count" => "boolean",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
