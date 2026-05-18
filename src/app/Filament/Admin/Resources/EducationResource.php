<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EducationResource\Pages;
use App\Filament\Admin\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\BelongsToSelect::make('biodata_id')
                    ->relationship('biodata', 'name')
                    ->required()
                    ->label('Biodata'),

                Forms\Components\TextInput::make('school')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('major')
                    ->maxLength(255),

                Forms\Components\TextInput::make('start_year')
                    ->label('Start Year')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue((int) date('Y'))
                    ->required(),

                Forms\Components\TextInput::make('end_year')
                    ->label('End Year')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue((int) date('Y'))
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
