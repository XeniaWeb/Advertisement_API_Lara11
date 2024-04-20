<?php

namespace Tests\Feature\Api;

use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Arr;
use Tests\TestCase;

class AdvertisementTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_api_return_advertisements_list(): void
    {
        $user = User::factory()->create();
        $ads = Advertisement::factory()->count(3)->create();

        $response = $this->actingAs($user)->getJson(route('ads.index'));

        $response->assertStatus(200)
        ->assertJsonCount(3, 'data')
        ->assertJson([
            'data' => [Arr::only($ads->toArray(), ['id', 'title', 'image', 'price', 'description'])],
        ]);
    }
}
