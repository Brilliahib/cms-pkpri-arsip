<?php

namespace App\Filament\Resources\DokumenLaporanRapResource\Pages;

use App\Filament\Resources\DokumenLaporanRapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenLaporanRaps extends ListRecords
{
    protected static string $resource = DokumenLaporanRapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
