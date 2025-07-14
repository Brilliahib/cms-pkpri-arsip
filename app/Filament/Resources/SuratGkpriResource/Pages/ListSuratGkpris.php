<?php

namespace App\Filament\Resources\SuratGkpriResource\Pages;

use App\Filament\Resources\SuratGkpriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratGkpris extends ListRecords
{
    protected static string $resource = SuratGkpriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
