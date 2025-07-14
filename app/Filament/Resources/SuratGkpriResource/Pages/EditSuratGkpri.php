<?php

namespace App\Filament\Resources\SuratGkpriResource\Pages;

use App\Filament\Resources\SuratGkpriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratGkpri extends EditRecord
{
    protected static string $resource = SuratGkpriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
