<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Pages;

use App\Filament\Admin\Resources\ContentBlocks\ContentBlockResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditContentBlock extends EditRecord
{
    protected static string $resource = ContentBlockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
