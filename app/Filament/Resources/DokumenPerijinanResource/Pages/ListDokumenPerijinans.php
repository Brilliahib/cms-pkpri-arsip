<?php

namespace App\Filament\Resources\DokumenPerijinanResource\Pages;

use App\Filament\Resources\DokumenPerijinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenPerijinans extends ListRecords
{
    protected static string $resource = DokumenPerijinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
