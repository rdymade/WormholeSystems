<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Map;
use App\Models\MapWebhook;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MapWebhook>
 */
final class MapWebhookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'map_id' => Map::factory(),
            'name' => fake()->words(2, true),
            'discord_webhook_url' => 'https://discord.com/api/webhooks/'.fake()->randomNumber(8, true).'/'.fake()->sha1(),
        ];
    }
}
