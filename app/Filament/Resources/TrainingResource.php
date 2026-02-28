<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrainingResource\Pages;
use App\Models\Training;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TrainingResource extends Resource
{
    protected static ?string $model = Training::class;

    protected static ?string $navigationLabel = 'Тренировки';

    protected static ?string $modelLabel = 'Тренировка';

    protected static ?string $pluralModelLabel = 'Тренировки';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Пользователь')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('age')
                    ->label('Возраст')
                    ->required()
                    ->numeric()
                    ->minValue(10)
                    ->maxValue(99),
                Forms\Components\TextInput::make('goal')
                    ->label('Цель тренировок')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Пользователь')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age')
                    ->label('Возраст')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.phone')
                    ->label('Номер')
                    ->searchable()
                    ->formatStateUsing(function (string $state): string {
                        // Форматируем номер телефона
                        $phone = preg_replace('/[^0-9]/', '', $state);

                        if (strlen($phone) === 11 && $phone[0] === '7') {
                            return '+7 (' . substr($phone, 1, 3) . ') ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . '-' . substr($phone, 9, 2);
                        }

                        return $state;
                    }),
                Tables\Columns\TextColumn::make('goal')
                    ->label('Цель тренировок')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновления')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListTrainings::route('/'),
            'create' => Pages\CreateTraining::route('/create'),
            'edit' => Pages\EditTraining::route('/{record}/edit'),
        ];
    }
}
