<?php

namespace App\Filament\Widgets;

use App\Models\Siswa;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SiswaChart extends ChartWidget
{
    protected static ?string $heading = 'Siswa Baru';
    protected static ?string $pollingInterval = '10s';
    protected static ?int $sort = 2;
    protected static string $color = 'info';


    protected function getData(): array
    {
        $data = Trend::model(Siswa::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        // dd($data->map(fn (TrendValue $value) => (int) $value->date));
        return [
            'datasets' => [
                [
                    'label' => 'Total Siswa',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}