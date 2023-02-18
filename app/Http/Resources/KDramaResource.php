<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KDramaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'year' => $this->year,
            'type' => $this->type,
            'episodes' => $this->episodes,
            'genres' => $this->genres,
            'released' => $this->released->format('d F Y')
        ];
    }

    public function with(Request $requests): array
    {
        return ['status' => 'success'];
    }
}