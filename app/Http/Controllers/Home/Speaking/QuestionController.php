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
//        Question::create([
//            "name" => "Test",
//            "topic_id" => 11
//        ]);

        $topic = Topic::whereId($id)->first();

        return \Response::view("home.speaking.question", [
            "topic" => $topic["name"],
            "questions" => $topic->questions
        ]);
    }
}
