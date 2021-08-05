<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

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



}
