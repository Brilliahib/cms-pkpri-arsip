<?php

namespace App\Filament\Resources\DokumenLaporanRatResource\Pages;

use App\Filament\Resources\DokumenLaporanRatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenLaporanRats extends ListRecords
{
    protected static string $resource = DokumenLaporanRatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
