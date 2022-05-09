<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperQuizzes
 */
class Quizzes extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "category_id",
        "title",
        "description",
        "created_at",
        "updated_at",
    ];

    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime",
    ];

    public function category(): HasOne
    {
        return $this->hasOne(QuizCategories::class, "id", "category_id");
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Questions::class, "quiz_id", "id");
    }
}
