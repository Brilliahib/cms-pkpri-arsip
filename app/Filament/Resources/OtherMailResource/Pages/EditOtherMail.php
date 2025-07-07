<?php

namespace App\Filament\Resources\OtherMailResource\Pages;

use App\Filament\Resources\OtherMailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherMail extends EditRecord
{
    protected static string $resource = OtherMailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
