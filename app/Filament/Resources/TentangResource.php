<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangResource\Pages;
use App\Filament\Resources\TentangResource\RelationManagers;
use App\Models\Tentang;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangResource extends Resource
{
    protected static ?string $model = Tentang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul'),
                TextInput::make('isi')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul'),
                TextColumn::make('isi'),
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
            'index' => Pages\ListTentangs::route('/'),
            'create' => Pages\CreateTentang::route('/create'),
            'edit' => Pages\EditTentang::route('/{record}/edit'),
        ];
    }
}
