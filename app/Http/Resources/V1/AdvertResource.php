<?php

declare(strict_types=1);

namespace App\Http\Resources\V1;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Advert */
class AdvertResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @return array<string, mixed >
     */
    public function toArray(Request $request): array
    {
        // dd($request->is('api/v1/adverts/*') && $request->query('full'));
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->images[0],
            'price' => $this->price / 100,
            'description' => $this
                ->when($request->is('api/v1/adverts')
                    || ($request->is('api/v1/adverts/*') && $request->query('full')), function () use ($request) {
                    if ($request->is('api/v1/adverts')) {
                        return str($this->description)->limit(50);
                    }
                    return $this->description;
                }),
            'images' => $this
                ->when($request->is('api/v1/adverts/*') && $request->query('full'), function () use ($request) {
                    return $this->images;
                }),
            'createdAt' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
