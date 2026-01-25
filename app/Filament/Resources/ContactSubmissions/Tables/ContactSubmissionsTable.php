<?php

namespace App\Filament\Resources\ContactSubmissions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Models\ContactSubmission;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Support\Icons\Heroicon;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;

class ContactSubmissionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('read_status')
                    ->formatStateUsing(fn (string $state): string => ucfirst($state))
                    ->badge()
                    ->icon(fn (string $state): Heroicon => match ($state) {
                        'read' =>  Heroicon::OutlinedCheckCircle,
                        'unread' => Heroicon::OutlinedExclamationCircle
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'read' => 'success',
                        'unread' => 'danger'
                    })
                    ->label('Read')
                    ->sortable(),
                TextColumn::make('subject')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                TrashedFilter::make(),
            ])
            ->recordActions([
                Action::make('mark_read')
                    ->label('Mark Read')
                    ->color('success')
                    ->icon(Heroicon::EnvelopeOpen)
                    ->action(function (ContactSubmission $record) {
                        $record->read_status = 'read';
                        $record->save();
                        Notification::make()
                            ->title('Marked as read')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (ContactSubmission $record) => $record->read_status === 'unread'),
                Action::make('mark_unread')
                    ->label('Mark Unread')
                    ->color('info')
                    ->icon(Heroicon::Envelope)
                    ->action(function (ContactSubmission $record) {
                        $record->read_status = 'unread';
                        $record->save();
                        Notification::make()
                            ->title('Marked as unread')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (ContactSubmission $record) => $record->read_status === 'read'),
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    BulkAction::make('mark_read')
                        ->label('Mark Selected as Read')
                        ->color('success')
                        ->icon(Heroicon::EnvelopeOpen)
                        ->action(function (Collection $records) {
                            $records->each(function ($record) {
                                $record->read_status = 'read';
                                $record->save();
                            });
                            Notification::make()
                            ->title('Marked as read')
                            ->success()
                            ->send();
                        }),
                    BulkAction::make('mark_unread')
                        ->label('Mark Selected as Unread')
                        ->color('info')
                        ->icon(Heroicon::Envelope)
                        ->action(function (Collection $records) {
                            $records->each(function ($record) {
                                $record->read_status = 'unread';
                                $record->save();
                            });
                            Notification::make()
                            ->title('Marked as unread')
                            ->success()
                            ->send();
                        }),
                    DeleteBulkAction::make()
                        ->label('Delete Selected'),
                ]),
            ]);
    }
}
