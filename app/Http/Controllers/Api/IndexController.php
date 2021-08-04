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
        Storage::disk('public')->put('all.json', json_encode($data));
        $path = storage_path(). "/app/public/all.json";
        return \Response::download($path);
    }
}
