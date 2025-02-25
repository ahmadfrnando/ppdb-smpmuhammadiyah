<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembukaanPendaftaranResource\Pages;
use App\Filament\Resources\PembukaanPendaftaranResource\RelationManagers;
use App\Models\PembukaanPendaftaran;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembukaanPendaftaranResource extends Resource
{
    protected static ?string $model = PembukaanPendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal_buka'),
                DatePicker::make('tanggal_tutup'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')->label('#')->rowIndex(),
                Tables\Columns\TextColumn::make('tanggal_buka')->label('Tanggal Buka'),
                Tables\Columns\TextColumn::make('tanggal_tutup')->label('Tanggal Tutup'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePembukaanPendaftarans::route('/'),
        ];
    }
}
