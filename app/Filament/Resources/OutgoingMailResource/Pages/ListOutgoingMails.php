<?php

namespace App\Filament\Resources\OutgoingMailResource\Pages;

use App\Filament\Resources\OutgoingMailResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListOutgoingMails extends ListRecords
{
    protected static string $resource = OutgoingMailResource::class;

    protected static ?string $title = 'Surat Keluar';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('createDocument')
                ->label('Tambah Surat')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->url($this->getResource()::getUrl('create')),
        ];
    }
}
