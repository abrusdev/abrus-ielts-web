<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Passage;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class IndexController extends Controller
{

    public function index()
    {
        $data = [
            "speaking" => Passage::whereId(1)->first()->topics()->count(),
            "writing" => 0
        ];

        $passages = [
            [
                "name" => "Part 1 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(1)->count(),
                "topics" => Topic::wherePassageId(1)->where("part", 1)->get()
            ],
            [
                "name" => "Part 2 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(2)->count(),
                "topics" => Topic::wherePassageId(1)->where("part", 2)->get()
            ],
            [
                "name" => "Part 3 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(3)->count(),
                "topics" => Topic::wherePassageId(1)->where("part", 3)->get()
            ]
        ];

        $data = [
            "data" => $data,
            "passages" => $passages
        ];
        return $data;
    }
}
