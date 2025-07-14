<?php

namespace App\Filament\Resources\DokumenLaporanRatResource\Pages;

use App\Filament\Resources\DokumenLaporanRatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenLaporanRat extends EditRecord
{
    protected static string $resource = DokumenLaporanRatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
