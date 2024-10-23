<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\Prestasi;
use Faker\Core\File;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_prestasi'),
                DatePicker::make('tanggal_prestasi'),
                FileUpload::make('foto_prestasi')
                    ->directory('foto-prestasi')
                    ->image()
                    ->imageResizeMode('cover')
                    ->maxSize(1024),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')->label('#')->rowIndex(),
                Tables\Columns\TextColumn::make('nama_prestasi'),
                Tables\Columns\TextColumn::make('tanggal_prestasi'),
                Tables\Columns\ImageColumn::make('foto_prestasi')
                    ->extraImgAttributes(['loading' => 'lazy'])
                    ->disk('public'),
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
            'index' => Pages\ManagePrestasis::route('/'),
        ];
    }
}