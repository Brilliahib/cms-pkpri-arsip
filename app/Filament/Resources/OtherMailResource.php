<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherMailResource\Pages;
use App\Filament\Resources\OtherMailResource\RelationManagers;
use App\Models\OtherMail;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class OtherMailResource extends Resource
{
    protected static ?string $model = OtherMail::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Dokumen Lainnya';

    protected static ?string $navigationGroup = 'Dokumen Pribadi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),
                TextInput::make('description')
                    ->nullable()
                    ->maxLength(500)
                    ->label('Deskripsi'),
                FileUpload::make('file_path')
                    ->nullable()
                    ->label('Dokumen File'),
                TextInput::make('month')
                    ->nullable()
                    ->maxLength(50)
                    ->label('Bulan'),
                TextInput::make('year')
                    ->nullable()
                    ->label('Tahun')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\IconColumn::make('file_path')
                    ->label('File')
                    ->icon('heroicon-o-document-text')
                    ->color('primary')
                    ->url(fn(OtherMail $record): ?string => $record->file_path ? asset('storage/' . $record->file_path) : null)
                    ->openUrlInNewTab()
                    ->tooltip('Lihat Dokumen'),

                TextColumn::make('month')
                    ->label('Bulan')
                    ->sortable(),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Tanggal Upload')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('year')
                    ->label('Tahun')
                    ->options(function () {
                        return OtherMail::query()
                            ->select(DB::raw('DISTINCT year'))
                            ->whereNotNull('year')
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                            ->toArray();
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum ada data')
            ->emptyStateDescription('Silakan buat dokumen lainnya terlebih dahulu.');
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
            'index' => Pages\ListOtherMails::route('/'),
            'create' => Pages\CreateOtherMail::route('/create'),
            'edit' => Pages\EditOtherMail::route('/{record}/edit'),
        ];
    }
}
