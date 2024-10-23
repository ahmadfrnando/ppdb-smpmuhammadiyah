<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\RelationManagers;
use App\Models\Pengumuman;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?int $navigationSort = 3;

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    TextInput::make('judul'),
                    TimePicker::make('waktu_mulai'),
                    TimePicker::make('waktu_selesai'),
                    FileUpload::make('foto')
                        ->directory('foto-pengumuman')
                        ->visibility('public')
                        ->image()
                        ->hiddenOn('edit')
                        ->imageResizeMode('cover')
                        ->maxSize(1024),
                ]);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')->label('#')->rowIndex(),
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('waktu_mulai'),
                Tables\Columns\TextColumn::make('waktu_selesai'),
                Tables\Columns\ImageColumn::make('foto')
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
            'index' => Pages\ManagePengumumen::route('/'),
        ];
    }
}