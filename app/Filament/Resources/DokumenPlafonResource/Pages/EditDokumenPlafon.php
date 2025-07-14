<?php

namespace App\Filament\Resources\DokumenPlafonResource\Pages;

use App\Filament\Resources\DokumenPlafonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenPlafon extends EditRecord
{
    protected static string $resource = DokumenPlafonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
