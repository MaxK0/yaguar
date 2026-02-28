<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Models\Photo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;

    protected static ?string $navigationLabel = 'Фотографии';

    protected static ?string $modelLabel = 'Фотография';

    protected static ?string $pluralModelLabel = 'Фотографии';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('path')
                    ->label('Изображение')
                    ->required()
                    ->image()
                    ->directory('photos')
                    ->preserveFilenames()
                    ->visibility('public')
                    ->afterStateUpdated(function ($state, $set) {
                        if ($state) {
                            $set('title', pathinfo($state, PATHINFO_FILENAME));
                        }
                    }),
                Forms\Components\Select::make('page')
                    ->label('Страница')
                    ->options([
                        'home' => 'Главная',
                        'about' => 'О клубе',
                        'gallery' => 'Галерея',
                    ])
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Активно')
                    ->default(true),
                Forms\Components\TextInput::make('order')
                    ->label('Порядок')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('path')
                    ->label('Изображение')
                    ->width(100),
                Tables\Columns\TextColumn::make('title')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('page')
                    ->label('Страница')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'home' => 'success',
                        'about' => 'warning',
                        'gallery' => 'info',
                    }),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Активно')
                    ->boolean(),
                Tables\Columns\TextColumn::make('order')
                    ->label('Порядок')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('page')
                    ->label('Страница')
                    ->options([
                        'home' => 'Главная',
                        'about' => 'О клубе',
                        'gallery' => 'Галерея',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (Photo $record) {
                        Storage::disk('public')->delete($record->path);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                Storage::disk('public')->delete($record->path);
                            }
                        }),
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
            'index' => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit' => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }
}
