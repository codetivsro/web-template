<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

final class PageForm
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
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->prefix(url('/').'/')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, Set $set) {
                                $set('slug', Str::slug($state));
                            }),
                        Textarea::make('content')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image(),
                    ]),
                Section::make('SEO')
                    ->schema([
                        TextInput::make('title_h1'),
                        TextInput::make('meta_title'),
                        TextInput::make('meta_description'),
                        TextInput::make('meta_keywords'),
                    ])
                    ->collapsed(),
            ]);
    }
}
