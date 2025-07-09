<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $name
 * @property string|null $identifier
 * @property string|array<int, mixed> $items
 * @property CarbonImmutable $created_at
 * @property CarbonImmutable $updated_at
 */
final class Menu extends Model
{
    protected $casts = [
        'items' => 'array',
    ];

    public static function identify(string $identifier): ?self
    {
        return self::query()
            ->where('identifier', $identifier)
            ->first();
    }
}
