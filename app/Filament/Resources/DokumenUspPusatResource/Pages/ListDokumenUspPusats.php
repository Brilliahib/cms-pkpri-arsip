<?php

namespace App\Filament\Resources\DokumenUspPusatResource\Pages;

use App\Filament\Resources\DokumenUspPusatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenUspPusats extends ListRecords
{
    protected static string $resource = DokumenUspPusatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
