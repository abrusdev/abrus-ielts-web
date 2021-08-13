<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P2Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "topic_id"
    ];
}
