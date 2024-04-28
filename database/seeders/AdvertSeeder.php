<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Advert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Advert::factory()->count(26)->create();
    }
}
