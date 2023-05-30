<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'dueDate' => $this->dueDate,
            'created_at' => $this->created_at->format('Y-m-d h:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d h:i:s'),
        ];
    }
}
