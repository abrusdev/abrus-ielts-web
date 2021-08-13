<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\P2Answer
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $topic_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|P2Answer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class P2Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "topic_id"
    ];
}
