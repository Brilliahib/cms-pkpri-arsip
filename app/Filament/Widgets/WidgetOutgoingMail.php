<?php

namespace App\Filament\Widgets;

use App\Models\OutgoingMail;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class WidgetOutgoingMail extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Surat Keluar';

    protected function getData(): array
    {
        $data = Trend::model(OutgoingMail::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Surat Keluar',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate)->toArray(),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => \Carbon\Carbon::parse($value->date)->translatedFormat('F'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
