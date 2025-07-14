<?php

namespace App\Filament\Resources\DaftarPengawasResource\Pages;

use App\Filament\Resources\DaftarPengawasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarPengawas extends ListRecords
{
    protected static string $resource = DaftarPengawasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
