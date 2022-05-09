<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @mixin IdeHelperAnswers
 */
class Answers extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "question_id",
        "answer",
        "is_true",
        "created_at",
        "updated_at",
    ];

    protected $casts = [
        "is_true"    => "boolean",
        "created_at" => "datetime",
        "updated_at" => "datetime",
    ];

    public function question(): HasOne
    {
        return $this->hasOne(Questions::class);
    }
}
