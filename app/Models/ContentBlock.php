<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property-read int $id
 * @property string $identifier
 * @property string $type
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
final class ContentBlock extends Model
{
    public static function identify(string $identifier): ?self
    {
        return self::query()
            ->where('identifier', $identifier)
            ->first();
    }
}
