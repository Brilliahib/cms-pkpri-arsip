<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\DB;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Dokumen Umum';

    protected static ?string $navigationGroup = 'Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('anggota_id')
                    ->label('Nama Anggota')
                    ->relationship('anggota', 'name')
                    ->required(),
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
                TextColumn::make('anggota.name')
                    ->label('Nama Anggota')
                    ->searchable(),

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
                    ->url(fn(Document $record): ?string => $record->file_path ? asset('storage/' . $record->file_path) : null)
                    ->openUrlInNewTab()
                    ->tooltip('Lihat Dokumen'),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
            ])
            ->filters([
                SelectFilter::make('year')
                    ->label('Tahun')
                    ->options(function () {
                        return Document::query()
                            ->select(DB::raw('DISTINCT year'))
                            ->whereNotNull('year')
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                            ->toArray();
                    }),

                SelectFilter::make('anggota_id')
                    ->label('Nama Anggota')
                    ->relationship('anggota', 'name')
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum ada data')
            ->emptyStateDescription('Silakan buat dokumen umum baru untuk memulai.');
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
