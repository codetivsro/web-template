<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property-read int $id
 * @property string $name
 * @property string|null $identifier
 * @property string|array<int, mixed> $items
 * @property Carbon $created_at
 * @property Carbon $updated_at
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
