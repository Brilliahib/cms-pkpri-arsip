<?php

namespace App\Filament\Resources\DocumentPersonalResource\Pages;

use App\Filament\Resources\DocumentPersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDocumentPersonal extends CreateRecord
{
    protected static string $resource = DocumentPersonalResource::class;

    protected static ?string $title = 'Tambah Dokumen Pribadi';
}
