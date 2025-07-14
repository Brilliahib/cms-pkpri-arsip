<?php

namespace App\Filament\Resources\DokumenPerijinanResource\Pages;

use App\Filament\Resources\DokumenPerijinanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenPerijinan extends EditRecord
{
    protected static string $resource = DokumenPerijinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
