<?php

namespace App\Filament\Resources\DocumentPersonalResource\Pages;

use App\Filament\Resources\DocumentPersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocumentPersonal extends EditRecord
{
    protected static string $resource = DocumentPersonalResource::class;

    protected static ?string $title = 'Edit Dokumen Pribadi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
