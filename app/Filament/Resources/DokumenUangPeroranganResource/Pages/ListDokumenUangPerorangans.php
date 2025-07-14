<?php

namespace App\Filament\Resources\DokumenUangPeroranganResource\Pages;

use App\Filament\Resources\DokumenUangPeroranganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenUangPerorangans extends ListRecords
{
    protected static string $resource = DokumenUangPeroranganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
