<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countDocuments = \App\Models\Document::count();
        $countIncomingMails = \App\Models\IncomingMail::count();
        $countOutgoingMails = \App\Models\OutgoingMail::count();
        $countOtherDocuments = \App\Models\OtherMail::count();
        $countAnggota = \App\Models\Anggota::count();

        return [
            Stat::make('Jumlah Dokumen Umum', $countDocuments),
            Stat::make('Jumlah Surat Masuk', $countIncomingMails),
            Stat::make('Jumlah Surat Keluar', $countOutgoingMails),
            Stat::make('Jumlah Dokumen Lainnya', $countOtherDocuments)
        ];
    }
}
