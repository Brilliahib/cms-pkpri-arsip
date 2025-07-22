<?php

namespace App\Filament\Widgets;

use App\Models\OtherMail;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class WidgetOtherMail extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Dokumen Lainnya';

    protected function getData(): array
    {
        $data = Trend::model(OtherMail::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Dokumen Lainnya',
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
