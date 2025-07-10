<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks;

use App\Filament\Admin\Resources\ContentBlocks\Pages\CreateContentBlock;
use App\Filament\Admin\Resources\ContentBlocks\Pages\EditContentBlock;
use App\Filament\Admin\Resources\ContentBlocks\Pages\ListContentBlocks;
use App\Filament\Admin\Resources\ContentBlocks\Schemas\ContentBlockForm;
use App\Filament\Admin\Resources\ContentBlocks\Tables\ContentBlocksTable;
use App\Models\ContentBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

final class ContentBlockResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

    protected static ?int $navigationSort = 3;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContentBlockForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContentBlocksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContentBlocks::route('/'),
            'create' => CreateContentBlock::route('/create'),
            'edit' => EditContentBlock::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('admin/resources.blocks.title.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin/resources.blocks.title.plural');
    }
}
