<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SpeakingController extends Controller
{
    public static function index()
    {
        return Response::view("home.speaking.index");
    }
}
