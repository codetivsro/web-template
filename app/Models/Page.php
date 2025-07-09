<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $name
 * @property string $slug
 * @property string $content
 * @property string|null $image
 * @property string|null $title_h1
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property CarbonImmutable $created_at
 * @property CarbonImmutable $updated_at
 */
final class Page extends Model
{
    //
}
