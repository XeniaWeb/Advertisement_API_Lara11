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
            'description' => $this->when($request->is('api/v1/ads'), function () use ($request) {
                if ($request->is('api/v1/ads')) {
                    return str($this->description)->limit(50);
                };

                return $this->description;
            }),
        ];
    }
}
