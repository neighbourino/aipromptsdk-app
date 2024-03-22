<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Guide;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;

use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieTagsInput;
use App\Filament\Resources\GuideResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Builder as FormBuilder;
use App\Filament\Resources\GuideResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;


class GuideResource extends Resource
{

    use Translatable;

    protected static ?string $model = Guide::class;

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

                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->collection('guides'),
                SpatieMediaLibraryFileUpload::make('featured_image')
                    ->collection('guides'),

                FormBuilder::make('content')
                    ->blocks([
                        FormBuilder\Block::make('heading')
                            ->schema([
                                TextInput::make('content')
                                    ->label('Heading')
                                    ->required(),
                                Select::make('level')
                                    ->options([
                                        'h1' => 'Heading 1',
                                        'h2' => 'Heading 2',
                                        'h3' => 'Heading 3',
                                        'h4' => 'Heading 4',
                                        'h5' => 'Heading 5',
                                        'h6' => 'Heading 6',
                                    ])
                                    ->required(),
                            ])
                            ->columns(2),
                        FormBuilder\Block::make('markdown')
                            ->schema([
                                MarkdownEditor::make('content')
                                    ->label('Markdown')
                                    ->required(),
                            ]),
                        FormBuilder\Block::make('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Image')
                                    ->image()
                                    ->required(),
                                TextInput::make('alt')
                                    ->label('Alt text')
                                    ->required(),
                            ]),


                    ]),
                SpatieTagsInput::make('tags'),
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
            'index' => Pages\ListGuides::route('/'),
            'create' => Pages\CreateGuide::route('/create'),
            'edit' => Pages\EditGuide::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['da', 'en'];
    }
}
