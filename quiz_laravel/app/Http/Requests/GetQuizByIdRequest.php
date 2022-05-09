<?php

namespace App\Http\Requests;

class GetQuizByIdRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "id"               => "required|integer",
            "with_answers"     => "boolean",
            "random_questions" => "boolean",
            "random_answers"   => "boolean",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    // FormRequest in query string ile gelen parametreyi de validate edebilmesi için kolleksiyona ekleme yapıyoruz.
    public function all($keys = null)
    {
        $request       = parent::all($keys);
        $request["id"] = $this->route("id");
        return $request;
    }
}
