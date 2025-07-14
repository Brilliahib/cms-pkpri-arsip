<?php

namespace App\Filament\Resources\DokumenPengurusResource\Pages;

use App\Filament\Resources\DokumenPengurusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenPenguruses extends ListRecords
{
    protected static string $resource = DokumenPengurusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
