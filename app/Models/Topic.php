<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Topic
 *
 * @property int $id
 * @property int $part
 * @property string $name
 * @property int $passage_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Topic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic wherePart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic wherePassageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Topic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "part",
        "passage_id"
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public static function getSpeakingTopics($part){
        return Topic::wherePassageId(1)->where("part", $part)->get();
    }
}
