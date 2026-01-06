<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Select::make('project_id')
                    ->relationship(name: 'project', titleAttribute: 'title')
                    ->required(),
                TextInput::make('subtitle')
                    ->columnSpanFull()
                    ->required(),
                CodeEditor::make('content')
                    ->language(Language::Markdown)
                    ->columnSpanFull(),
            ]);
    }
}
