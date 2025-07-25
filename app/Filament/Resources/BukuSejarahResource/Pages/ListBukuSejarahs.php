<?php

namespace App\Filament\Resources\BukuSejarahResource\Pages;

use App\Filament\Resources\BukuSejarahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListBukuSejarahs extends ListRecords
{
    protected static string $resource = BukuSejarahResource::class;

    public function getTitle(): string
    {
        return 'Buku Sejarah';
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('createCategory')
                ->label('Tambah Buku Sejarah')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->url($this->getResource()::getUrl('create')),
        ];
    }
}
