<?php

namespace App\Filament\Resources\ADARTResource\Pages;

use App\Filament\Resources\ADARTResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListADARTS extends ListRecords
{
    protected static string $resource = ADARTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
