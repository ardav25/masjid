<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonasiResource\Pages;
use App\Models\Donasi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonasiResource extends Resource
{
    protected static ?string $model = Donasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                TextInput::make('isi')
                    ->label('Isi')
                    ->nullable()
                    ->maxLength(65535),
                FileUpload::make('path')
                    ->label('Image Thumbnail')
                    ->required(),
                   
                FileUpload::make('qris_path')
                    ->label('Image Qris')
                    ->required(),

                // New Fields
                TextInput::make('nama_atm_1')->label('Nama ATM 1')->nullable(),
                TextInput::make('no_rek_1')->label('No Rek 1')->nullable(),
                TextInput::make('nama_atm_2')->label('Nama ATM 2')->nullable(),
                TextInput::make('no_rek_2')->label('No Rek 2')->nullable(),
                TextInput::make('nama_atm_3')->label('Nama ATM 3')->nullable(),
                TextInput::make('no_rek_3')->label('No Rek 3')->nullable(),
                TextInput::make('emoney_1')->label('Emoney 1')->nullable(),
                TextInput::make('nomer_va_1')->label('Nomer VA 1')->nullable(),
                TextInput::make('emoney_2')->label('Emoney 2')->nullable(),
                TextInput::make('nomer_va_2')->label('Nomer VA 2')->nullable(),
                TextInput::make('emoney_3')->label('Emoney 3')->nullable(),
                TextInput::make('nomer_va_3')->label('Nomer VA 3')->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->label('Judul'),
                TextColumn::make('isi')->label('Isi'),
                ImageColumn::make('path')->label('Gambar'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDonasis::route('/'),
            'create' => Pages\CreateDonasi::route('/create'),
            'edit' => Pages\EditDonasi::route('/{record}/edit'),
        ];
    }
}
