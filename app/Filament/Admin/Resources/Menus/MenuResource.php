<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Menus;

use App\Filament\Admin\Resources\Menus\Pages\CreateMenu;
use App\Filament\Admin\Resources\Menus\Pages\EditMenu;
use App\Filament\Admin\Resources\Menus\Pages\ListMenus;
use App\Filament\Admin\Resources\Menus\Schemas\MenuForm;
use App\Filament\Admin\Resources\Menus\Tables\MenusTable;
use App\Models\Menu;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

final class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?int $navigationSort = 2;

    protected static string|null|UnitEnum $navigationGroup = 'CMS';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Bars3;

    public static function form(Schema $schema): Schema
    {
        return MenuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenusTable::configure($table);
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
            'index' => ListMenus::route('/'),
            'create' => CreateMenu::route('/create'),
            'edit' => EditMenu::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('admin/resources.menus.title.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('admin/resources.menus.title.plural');
    }
}
