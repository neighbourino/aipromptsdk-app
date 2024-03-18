<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Prompt;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use RalphJSmit\Filament\SEO\SEO;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\RichEditor;

use Illuminate\Database\Eloquent\Builder;

use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieTagsInput;
use App\Filament\Resources\PromptResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PromptResource\RelationManagers;


class PromptResource extends Resource
{
    use Translatable;


    protected static ?string $model = Prompt::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $uuid = Str::uuid();
                        #$set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->readOnly()
                    ->maxLength(255),
                Hidden::make('is_slug_changed_manually')
                    ->default(false)
                    ->dehydrated(false),
                RichEditor::make('description'),
                Textarea::make('short_description'),
                Textarea::make('role_system'),
                Textarea::make('role_user'),
                RichEditor::make('example_output'),

                Select::make('type')
                    ->options([
                        'work' => 'Work',
                        'play' => 'Play'
                    ]),

                SpatieTagsInput::make('tags'),

                //     Section::make([
                //     SEO::make()
                // ]),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPrompts::route('/'),
            'create' => Pages\CreatePrompt::route('/create'),
            'edit' => Pages\EditPrompt::route('/{record}/edit'),
        ];
    }


    public static function getTranslatableLocales(): array
    {
        return ['da', 'en'];
    }
}
