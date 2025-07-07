<?php

namespace App\Filament\Resources\OtherMailResource\Pages;

use App\Filament\Resources\OtherMailResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListOtherMails extends ListRecords
{
    protected static string $resource = OtherMailResource::class;

    protected static ?string $title = 'Dokumen Lainnya';

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
