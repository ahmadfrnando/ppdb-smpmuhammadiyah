<?php

namespace App\Filament\Resources\PembukaanPendaftaranResource\Pages;

use App\Filament\Resources\PembukaanPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePembukaanPendaftarans extends ManageRecords
{
    protected static string $resource = PembukaanPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
