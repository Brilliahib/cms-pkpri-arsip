<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countDocuments = \App\Models\Document::count();
        $countDocumentPersonals = \App\Models\DocumentPersonal::count();

        return [
            Stat::make('Jumlah Dokumen Umum', $countDocuments),
            Stat::make('Jumlah Dokumen Pribadi', $countDocumentPersonals)
        ];
    }
}
