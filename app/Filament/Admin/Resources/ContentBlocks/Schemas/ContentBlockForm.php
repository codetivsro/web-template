<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

final class ContentBlockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('identifier')
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Select::make('type')
                            ->options([
                                'text' => 'Text',
                                'editor' => 'Editor',
                            ])
                            ->required(),
                    ]),
            ]);
    }
}
