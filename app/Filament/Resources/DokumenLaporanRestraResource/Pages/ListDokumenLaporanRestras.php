<?php

namespace App\Filament\Resources\DokumenLaporanRestraResource\Pages;

use App\Filament\Resources\DokumenLaporanRestraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenLaporanRestras extends ListRecords
{
    protected static string $resource = DokumenLaporanRestraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
