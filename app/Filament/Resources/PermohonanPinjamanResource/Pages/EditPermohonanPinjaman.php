<?php

namespace App\Filament\Resources\PermohonanPinjamanResource\Pages;

use App\Filament\Resources\PermohonanPinjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermohonanPinjaman extends EditRecord
{
    protected static string $resource = PermohonanPinjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
