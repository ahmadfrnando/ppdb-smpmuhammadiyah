<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Siswa')
                    ->schema([
                        Forms\Components\TextInput::make('nama_siswa')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('ttl')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('agama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('warga_negara')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('jlh_saudara')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('alamat_siswa')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
                Section::make('Data Orang Tua')
                    ->schema([
                        Forms\Components\TextInput::make('nama_ayah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pendidikan_ayah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pekerjaan_ayah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nama_ibu')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pendidikan_ibu')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pekerjaan_ibu')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nama_wali')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pendidikan_wali')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pekerjaan_wali')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('alamat_orangtua')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('telp')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
                Section::make('Data Sekolah')
                    ->schema([
                        Forms\Components\TextInput::make('nama_sekolah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('alamat_sekolah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('kartu')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('no_ijazah')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nisn')
                            ->required()
                            ->numeric(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')->label('#')->rowIndex(),
                Tables\Columns\TextColumn::make('nama_siswa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->numeric(),
                Tables\Columns\TextColumn::make('nama_sekolah')
                    ->label('Sekolah Asal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telp')
                    ->label('No. HP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Daftar Pada')
                    ->date()
                    ->sortable()
                    ->toggleable(true),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('hapus')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->action(fn(Siswa $record) => $record->delete()),
                Tables\Actions\Action::make('Laporan')
                    ->icon('heroicon-s-printer')
                    ->color('success')
                    ->url(
                        fn(Siswa $record): string => route('laporan.pendaftaran-siswa', ['id' => $record->id]),
                        true
                    )
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
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}