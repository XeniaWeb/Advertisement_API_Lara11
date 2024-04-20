<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
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
            'image' => $this->images[0],
            'price' => $this->price/100,
            'description' => $this->when($request->is('api/categories*'), function () use ($request) {
                if ($request->is('api/categories')) {
                    return str($this->description)->limit(20);
                };

                return $this->description;
            }),
        ];
    }
}
