<?php

namespace App\Filament\Resources\DaftarPengawasResource\Pages;

use App\Filament\Resources\DaftarPengawasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarPengawas extends EditRecord
{
    protected static string $resource = DaftarPengawasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
