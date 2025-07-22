<?php

namespace App\Filament\Widgets;

use App\Models\IncomingMail;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class WidgetIncomingMail extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Surat Masuk';

    protected function getData(): array
    {
        $data = Trend::model(IncomingMail::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Surat Masuk',
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
