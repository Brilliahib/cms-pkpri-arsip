<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Filament\Resources\AnggotaResource\RelationManagers;
use App\Models\Anggota;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Anggota Koperasi';

    protected static ?string $navigationGroup = 'Kelola';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Anggota'),
                TextInput::make('instansi')
                    ->nullable()
                    ->maxLength(255)
                    ->label('Instansi'),
                TextInput::make('alamat')
                    ->nullable()
                    ->maxLength(500)
                    ->label('Alamat'),
                TextInput::make('nomor_telepon')
                    ->nullable()
                    ->maxLength(20)
                    ->label('Nomor Telepon'),
                TextInput::make('nama_ketua')
                    ->nullable()
                    ->maxLength(255)
                    ->label('Nama Ketua'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Anggota')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('instansi')
                    ->label('Instansi'),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat'),
                Tables\Columns\TextColumn::make('nomor_telepon')
                    ->label('Nomor Telepon'),
                Tables\Columns\TextColumn::make('nama_ketua')
                    ->label('Nama Ketua')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Belum ada data')
            ->emptyStateDescription('Silakan buat anggota koperasi primer.');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
