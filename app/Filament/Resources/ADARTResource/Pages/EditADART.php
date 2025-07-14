<?php

namespace App\Filament\Resources\ADARTResource\Pages;

use App\Filament\Resources\ADARTResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditADART extends EditRecord
{
    protected static string $resource = ADARTResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
