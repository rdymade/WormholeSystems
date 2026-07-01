<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Database\Factories\MapWebhookFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * A reusable Discord webhook destination (a channel URL) that alerts post to.
 *
 * @property int $id
 * @property int $map_id
 * @property string $name
 * @property string $discord_webhook_url
 * @property-read string|CarbonImmutable $created_at
 * @property-read string|CarbonImmutable $updated_at
 * @property-read Map $map
 * @property-read Collection<int, MapAlert> $alerts
 */
#[UseFactory(MapWebhookFactory::class)]
final class MapWebhook extends Model
{
    /** @use HasFactory<MapWebhookFactory> */
    use HasFactory;

    /**
     * The map this webhook belongs to.
     *
     * @return BelongsTo<Map, $this>
     */
    public function map(): BelongsTo
    {
        return $this->belongsTo(Map::class);
    }

    /**
     * The alerts that deliver to this webhook.
     *
     * @return HasMany<MapAlert, $this>
     */
    public function alerts(): HasMany
    {
        return $this->hasMany(MapAlert::class);
    }

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'discord_webhook_url' => 'encrypted',
        ];
    }
}
