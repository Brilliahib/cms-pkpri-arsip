<?php

namespace App\Filament\Resources\DokumenUspPusatResource\Pages;

use App\Filament\Resources\DokumenUspPusatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenUspPusat extends EditRecord
{
    protected static string $resource = DokumenUspPusatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
