<?php

namespace App\Filament\Resources\DokumenKhususResource\Pages;

use App\Filament\Resources\DokumenKhususResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumenKhusus extends EditRecord
{
    protected static string $resource = DokumenKhususResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
