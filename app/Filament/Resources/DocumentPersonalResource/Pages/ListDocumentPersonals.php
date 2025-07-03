<?php

namespace App\Filament\Resources\DocumentPersonalResource\Pages;

use App\Filament\Resources\DocumentPersonalResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListDocumentPersonals extends ListRecords
{
    protected static string $resource = DocumentPersonalResource::class;

    protected static ?string $title = 'Dokumen Pribadi';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('createDocument')
                ->label('Tambah Dokumen')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->url($this->getResource()::getUrl('create')),
        ];
    }
}
