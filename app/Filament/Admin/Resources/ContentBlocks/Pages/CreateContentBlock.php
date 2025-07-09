<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Pages;

use App\Filament\Admin\Resources\ContentBlocks\ContentBlockResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateContentBlock extends CreateRecord
{
    protected static string $resource = ContentBlockResource::class;
}
