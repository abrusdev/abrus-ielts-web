<?php

namespace App\Http\Controllers\Home\Speaking;

use App\Http\Controllers\Controller;
use App\Models\Passage;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    public static function index($id = 1, Request $request)
    {
        $passages = Passage::all();
        $topics = Topic::all()->sortByDesc("id");

        return Response::view("home.speaking.index", [
            "passages" => $passages,
            "topics" => $topics,
            "part" => $id
        ]);
    }

    public static function store(Request $request)
    {
        Topic::create([
            "name" => $request["name"],
            "part" => $request["part"],
            "passage_id" => 1
        ]);

        return redirect()->route("speaking.topics", $request["part"]);
    }
}
