<?php

namespace App\Http\Controllers\Home\Speaking;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Response;

class AnswerController extends Controller
{
    public static function index($id, $q)
    {
        $question = Question::whereId($q)->first();

        return Response::view("home.speaking.answer", [
            "id" => $id,
            "q" => $q,
            "question" => $question,
            "answers" => $question->answers
        ]);
    }

    public static function store($id, $q, Request $request)
    {
        Answer::create([
            "content" => $request['name'],
            "question_id" => $q
        ]);

        return redirect()->route("speaking.answers", [$id, $q]);
    }

    public static function update($id, $q, Request $request){
        Answer::where("id", $request["id"])
            ->update(["content" => $request["name"]]);

        return redirect()->route("speaking.answers", [$id, $q]);
    }
}
