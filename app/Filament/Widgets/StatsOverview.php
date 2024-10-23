<?php

namespace App\Filament\Widgets;

use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Siswa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
            return [
                Stat::make('Total Siswa Baru', Siswa::count()),
                Stat::make('Total Pengumuman', Pengumuman::count()),
                Stat::make('Total Prestasi', Prestasi::count()),
            ];
    }
}