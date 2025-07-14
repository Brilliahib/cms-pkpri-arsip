<?php

namespace App\Filament\Resources\BukuSejarahResource\Pages;

use App\Filament\Resources\BukuSejarahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBukuSejarah extends EditRecord
{
    protected static string $resource = BukuSejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
