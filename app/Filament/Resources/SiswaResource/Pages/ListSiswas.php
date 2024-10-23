<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Date;
use Symfony\Component\Clock\DatePoint;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('Buat Pendaftaran baru'))->icon('heroicon-c-plus-circle'),
            Actions\Action::make('laporan_Pendaftaran')
                ->color('success')
                ->modalWidth('lg')
                ->icon('heroicon-s-printer')
                ->form([
                    DatePicker::make('tanggal_mulai'),
                    DatePicker::make('tanggal_akhir')->default(now()),
                ])
                ->action(function (array $data) {
                    $tanggalMulai = $data['tanggal_mulai'];
                    $tanggalAkhir = $data['tanggal_akhir'];

                    return redirect()->route('laporan.pendaftaran', [
                        'tanggal_mulai' => $tanggalMulai,
                        'tanggal_akhir' => $tanggalAkhir,
                    ]);
                })
        ];
    }
}