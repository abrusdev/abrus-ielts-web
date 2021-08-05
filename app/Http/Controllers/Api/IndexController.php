<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TopicResource;
use App\Models\Passage;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        $data = [
            "speaking" => Passage::whereId(1)->first()->topics()->count(),
            "writing" => 0
        ];

        $passages = [
            [
                "name" => "Part 1 - Question with Answers",
                "passage" => "Speaking",
                "part" => 1,
                "questions" => Question::getSpeakingQuestions(1)->count(),
                "topics" => TopicResource::collection(Topic::getSpeakingTopics(1))->toArray($request)
            ],
            [
                "name" => "Part 2 - Question with Answers",
                "passage" => "Speaking",
                "part" => 2,
                "questions" => Question::getSpeakingQuestions(2)->count(),
                "topics" => TopicResource::collection(Topic::getSpeakingTopics(2))->toArray($request)
            ],
            [
                "name" => "Part 3 - Question with Answers",
                "passage" => "Speaking",
                "part" => 3,
                "questions" => Question::getSpeakingQuestions(3)->count(),
                "topics" => TopicResource::collection(Topic::getSpeakingTopics(3))->toArray($request)
            ]
        ];

        $data = [
            "data" => $data,
            "passages" => $passages
        ];
        return $data;
    }
}
