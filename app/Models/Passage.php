<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Passage
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Topic[] $topics
 * @property-read int|null $topics_count
 * @method static \Illuminate\Database\Eloquent\Builder|Passage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Passage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Passage extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function topics(){
        return $this->hasMany(Topic::class);
    }
}
