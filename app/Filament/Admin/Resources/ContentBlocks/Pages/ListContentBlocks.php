<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Pages;

use App\Filament\Admin\Resources\ContentBlocks\ContentBlockResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListContentBlocks extends ListRecords
{
    protected static string $resource = ContentBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
