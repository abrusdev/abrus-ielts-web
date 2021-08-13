<?php

namespace App\Http\Controllers\Home\Speaking;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\P2Answer;
use Illuminate\Http\Request;

class P2AnswerController extends Controller
{
    public static function store($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        P2Answer::create([
            "title" => $request['title'],
            "topic_id" => $id,
            "content" => $request["content"]
        ]);

        return redirect()->route("speaking.questions", $id);
    }

    public static function update($id, Request $request){
        P2Answer::where("id", $request["id"])
            ->update([
                "title" => $request["title"],
                "content" => $request["content"]
            ]);

        return redirect()->route("speaking.questions", [$id]);
    }

    public static function delete($id, Request $request){
        P2Answer::where("id", $request["id"])
            ->delete();

        return redirect()->route("speaking.questions", [$id]);
    }
}
