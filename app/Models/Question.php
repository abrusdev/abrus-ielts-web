<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

/**
 * App\Models\Question
 *
 * @property int $id
 * @property string $name
 * @property int $topic_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Answer[] $answers
 * @property-read int|null $answers_count
 */
class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "topic_id"
    ];

    public static function getSpeakingQuestions($part): Builder
    {
        $topicIds = DB::table("topics")
            ->where("passage_id", 1)
            ->where("part", $part)
            ->pluck("id")
            ->toArray();

        return DB::table("questions")
            ->whereIn("topic_id", $topicIds);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }


}
