<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Storage;

class IndexController extends Controller
{

    public function index()
    {
        $data = [
            "topics" => Topic::all()
        ];
        return $data;
    }
}
