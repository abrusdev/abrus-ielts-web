<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Passage;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SpeakingController extends Controller
{
    public static function index()
    {
        $passages = Passage::all();
        $topics = Topic::all();

        return Response::view("home.speaking.index", [
            "passages" => $passages,
            "topics" => $topics
        ]);
    }

    public static function store(Request $request)
    {
        Topic::create([
            "name" => $request["name"],
            "part" => $request["part"],
            "passage_id" => 1
        ]);
        return Response::redirectTo("/home/speaking");
    }
}
