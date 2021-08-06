<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopicResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'part' => $this->part,
            'questions_count' => $this->questions->count(),
            'questions' => QuestionResource::collection($this->questions->all())->toArray($request)
        ];
    }
}
