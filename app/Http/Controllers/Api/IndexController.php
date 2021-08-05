<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class IndexController extends Controller
{

    public function index()
    {

        $passages = [
            [
                "name" => "Part 1 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(1)->count()
            ],
            [
                "name" => "Part 2 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(2)->count()
            ],
            [
                "name" => "Part 3 - Question with Answers",
                "passage" => "Speaking",
                "questions" => Question::getSpeakingQuestions(3)->count()
            ]
        ];

        $data = [
            "passages" => $passages,
            "topics" => Topic::all()
        ];
        return $data;
    }
}
