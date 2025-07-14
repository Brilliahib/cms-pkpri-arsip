<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected static ?string $title = 'Kategori Dokumen';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('createCategory')
                ->label('Tambah Kategori')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->url($this->getResource()::getUrl('create')),
        ];
    }
}
