<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperQuizCategoires
 */
class QuizCategoires extends Model
{
    use HasFactory;

    protected $table = 'quiz_categories';
}
