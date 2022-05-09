<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetCategoriesRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "with_quizzes"      => "boolean",
            "random_categories" => "boolean",
            "random_quizzes"    => "boolean",
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
