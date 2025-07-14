<?php

namespace App\Filament\Resources\DokumenSebratanResource\Pages;

use App\Filament\Resources\DokumenSebratanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenSebratans extends ListRecords
{
    protected static string $resource = DokumenSebratanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
