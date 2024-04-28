<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvertRequest;
use App\Http\Resources\V1\AdvertCollection;
use App\Http\Resources\V1\AdvertResource;
use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AdvertCollection
    {
        $ads = Advert::paginate(10);
        // return AdvertResource::collection($ads);
        return new AdvertCollection($ads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdvertRequest $request): AdvertResource
    {
        $ad = Advert::create($request->validated());


        return AdvertResource::make($ad);
        // return [$ad->id, http_response_code()];
    }

    /**
     * Display the specified resource.
     */
    public function show(Advert $advert): AdvertResource
    {

        return new AdvertResource($advert);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advert $advert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advert $advert)
    {
        //
    }
}
