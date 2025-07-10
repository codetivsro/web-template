<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContentBlocks\Tables;

use App\Models\ContentBlock;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ContentBlocksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->visible(fn () => auth()->user()?->isSuperAdmin()),
                Action::make('edit-content')
                    ->label(__('Edit content'))
                    ->schema([
                        Textarea::make('content_text')
                            ->hiddenLabel()
                            ->visible(fn (ContentBlock $record) => $record->type === 'text'),
                        RichEditor::make('content_editor')
                            ->hiddenLabel()
                            ->visible(fn (ContentBlock $record) => $record->type === 'editor'),
                    ])
                    ->fillForm(function (ContentBlock $record) {
                        return [
                            self::getCurrentContentKey($record) => $record->content,
                        ];
                    })
                    ->action(function (ContentBlock $record, array $data) {
                        $record->update([
                            'content' => $data[self::getCurrentContentKey($record)],
                        ]);

                        Notification::make()
                            ->success()
                            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                            ->send();
                    })
                    ->modalWidth('lg'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    private static function getCurrentContentKey(ContentBlock $record): string
    {
        return match ($record->type) {
            'editor' => 'content_editor',
            'text' => 'content_text',
            default => 'content',
        };
    }
}
