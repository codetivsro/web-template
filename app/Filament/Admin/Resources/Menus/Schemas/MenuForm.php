<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Menus\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

final class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('identifier')
                            ->required()
                            ->unique()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, Set $set) {
                                $set('identifier', Str::slug($state));
                            }),
                        TextInput::make('name')
                            ->required(),
                    ]),
                Section::make(__('Menu Items'))
                    ->schema([
                        Repeater::make('items')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('label')
                                    ->required(),
                                TextInput::make('url')
                                    ->required(),
                                Toggle::make('open_in_new_tab'),
                            ])
                            ->columns(3),
                    ]),
            ]);
    }
}
