<?php

namespace App\Filament\Resources\DokumenLaporanRestraResource\Pages;

use App\Filament\Resources\DokumenLaporanRestraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenLaporanRestra extends EditRecord
{
    protected static string $resource = DokumenLaporanRestraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
