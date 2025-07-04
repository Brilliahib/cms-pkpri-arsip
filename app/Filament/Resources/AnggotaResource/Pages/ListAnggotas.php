<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListAnggotas extends ListRecords
{
    protected static string $resource = AnggotaResource::class;

    protected static ?string $title = 'Anggota Koperasi Primer';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('createAnggota')
                ->label('Tambah Anggota')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->url($this->getResource()::getUrl('create')),
        ];
    }
}
