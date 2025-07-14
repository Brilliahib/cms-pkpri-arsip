<?php

namespace App\Filament\Resources\DokumenKhususResource\Pages;

use App\Filament\Resources\DokumenKhususResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenKhususes extends ListRecords
{
    protected static string $resource = DokumenKhususResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
