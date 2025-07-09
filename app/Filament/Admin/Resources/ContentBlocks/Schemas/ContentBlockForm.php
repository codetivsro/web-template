<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
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
                            ->required()
                            ->visible(fn () => auth()->user()->isSuperAdmin()),
                        TextInput::make('identifier')
                            ->unique(ignoreRecord: true)
                            ->required()
                            ->visible(fn () => auth()->user()->isSuperAdmin()),
                        Select::make('type')
                            ->options([
                                'text' => 'Text',
                                'editor' => 'Editor',
                            ])
                            ->required()
                            ->live()
                            ->visible(fn () => auth()->user()->isSuperAdmin()),
                        Textarea::make('content_text')
                            ->label('Content')
                            ->statePath('content')
                            ->disabled(fn (Get $get) => $get('type') !== 'text')
                            ->hidden(fn (Get $get) => $get('type') !== 'text'),
                        RichEditor::make('content_editor')
                            ->label('Content')
                            ->statePath('content')
                            ->disabled(fn (Get $get) => $get('type') !== 'editor')
                            ->hidden(fn (Get $get) => $get('type') !== 'editor'),
                    ]),
            ]);
    }
}
