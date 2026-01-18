<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('subtitle')
                    ->columnSpanFull()
                    ->required(),
                CodeEditor::make('content')
                    ->language(Language::Markdown),
                FileUpload::make('thumbnail')
                    ->disk('public')
                    ->image(),
            ]);
    }
}
