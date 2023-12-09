<?php

namespace App\Http\Resources;

use App\Http\Resources\SkillResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->name,
            'project_url' => $this->project_url,
            'image' => asset('/storage/'. $this->image),
            'skill'=> new SkillResource($this->whenLoaded('skill')),
            
        ];
    }
}
