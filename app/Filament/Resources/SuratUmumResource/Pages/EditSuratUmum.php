<?php

namespace App\Filament\Resources\SuratUmumResource\Pages;

use App\Filament\Resources\SuratUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratUmum extends EditRecord
{
    protected static string $resource = SuratUmumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
