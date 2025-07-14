<?php

namespace App\Filament\Resources\DokumenPengurusResource\Pages;

use App\Filament\Resources\DokumenPengurusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenPengurus extends EditRecord
{
    protected static string $resource = DokumenPengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
