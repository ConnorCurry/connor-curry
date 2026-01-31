<?php

namespace App\Filament\Resources\ContactSubmissions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ContactSubmissionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('read_status')
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
                    ->hiddenLabel(),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('subject'),
                TextEntry::make('message')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
