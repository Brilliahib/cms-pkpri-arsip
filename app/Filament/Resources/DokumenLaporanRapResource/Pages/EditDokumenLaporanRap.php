<?php

namespace App\Filament\Resources\DokumenLaporanRapResource\Pages;

use App\Filament\Resources\DokumenLaporanRapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenLaporanRap extends EditRecord
{
    protected static string $resource = DokumenLaporanRapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
