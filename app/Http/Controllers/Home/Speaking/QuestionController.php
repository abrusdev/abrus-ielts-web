<?php

namespace App\Http\Controllers\Home\Speaking;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public static function index($id)
    {
        $topic = Topic::whereId($id)->first();

        return \Response::view("home.speaking.question", [
            "id" => $id,
            "topic" => $topic["name"],
            "questions" => $topic->questions
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
