<?php

namespace App\Filament\Resources\DokumenUangPeroranganResource\Pages;

use App\Filament\Resources\DokumenUangPeroranganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenUangPerorangan extends EditRecord
{
    protected static string $resource = DokumenUangPeroranganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
