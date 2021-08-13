<?php

namespace App\Http\Controllers\Home\Speaking;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\P2Answer;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    public static function index($id)
    {
        $topic = Topic::whereId($id)->first();


        if ($topic->part != 2)
            return \Response::view("home.speaking.question", [
                "id" => $id,
                "topic" => $topic["name"],
                "questions" => $topic->questions,
                "part" => $topic->part
            ]);

        $answers = P2Answer::all();
        return Response::view("home.speaking.p2-question", [
            "id" => $id,
            "topic" => $topic["name"],
            "questions" => $topic->questions,
            "part" => $topic->part,
            "answers" => $answers
        ]);
    }

    public static function store($id, Request $request)
    {
        Question::create([
            "name" => $request['name'],
            "topic_id" => $id
        ]);

        return redirect()->route("speaking.questions", $id);
    }
}
