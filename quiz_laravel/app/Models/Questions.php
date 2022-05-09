<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperQuestions
 */
class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "quiz_id",
        "question",
        "created_at",
        "updated_at",
    ];

    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime",
    ];

    public function quiz(): HasOne
    {
        return $this->hasOne(Quizzes::class, "id", "quiz_id");
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answers::class, "question_id", "id");
    }
}
