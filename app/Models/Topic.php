<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
