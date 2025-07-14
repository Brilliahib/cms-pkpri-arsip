<?php

namespace App\Filament\Resources\PermohonanPralenanResource\Pages;

use App\Filament\Resources\PermohonanPralenanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermohonanPralenan extends EditRecord
{
    protected static string $resource = PermohonanPralenanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
