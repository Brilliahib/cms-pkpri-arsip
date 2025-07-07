<?php

namespace App\Filament\Resources\IncomingMailResource\Pages;

use App\Filament\Resources\IncomingMailResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListIncomingMails extends ListRecords
{
    protected static string $resource = IncomingMailResource::class;

    protected static ?string $title = 'Surat Masuk';

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
