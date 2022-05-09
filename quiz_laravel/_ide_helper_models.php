<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Answers
 *
 * @property int $id
 * @property string $answer
 * @property bool $is_true
 * @property int $question_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Questions|null $question
 * @method static \Illuminate\Database\Eloquent\Builder|Answers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereIsTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereUpdatedAt($value)
 */
	class IdeHelperAnswers {}
}

namespace App\Models{
/**
 * App\Models\Questions
 *
 * @property int $id
 * @property int $quiz_id
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Quizzes|null $quiz
 * @method static \Illuminate\Database\Eloquent\Builder|Questions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions query()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereUpdatedAt($value)
 */
	class IdeHelperQuestions {}
}

namespace App\Models{
/**
 * App\Models\QuizCategories
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Quizzes[] $Quizzes
 * @property-read int|null $quizzes_count
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizCategories whereUpdatedAt($value)
 */
	class IdeHelperQuizCategories {}
}

namespace App\Models{
/**
 * App\Models\Quizzes
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quizzes whereUpdatedAt($value)
 */
	class IdeHelperQuizzes {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class IdeHelperUser {}
}

