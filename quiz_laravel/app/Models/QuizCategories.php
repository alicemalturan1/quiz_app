<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperQuizCategories
 */
class QuizCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "created_at",
        "updated_at",
    ];

    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime",
    ];

    public function quizzes(): HasMany
    {
        return $this->hasMany(Quizzes::class, "category_id", "id");
    }
}
