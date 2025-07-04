<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentPersonalResource\Pages;
use App\Filament\Resources\DocumentPersonalResource\RelationManagers;
use App\Models\DocumentPersonal;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentPersonalResource extends Resource
{
    protected static ?string $model = DocumentPersonal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    protected static ?string $navigationLabel = 'Dokumen Pribadi';

    protected static ?string $navigationGroup = 'Dokumen';

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
                    ->maxLength(4)
                    ->label('Tahun'),
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
                    ->url(fn(DocumentPersonal $record): ?string => $record->file_path ? asset('storage/' . $record->file_path) : null)
                    ->openUrlInNewTab()
                    ->tooltip('Lihat Dokumen'),

                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
            ])
            ->filters([
                //
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
            ->emptyStateDescription('Silakan buat dokumen pribadi baru untuk memulai.');
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
            'index' => Pages\ListDocumentPersonals::route('/'),
            'create' => Pages\CreateDocumentPersonal::route('/create'),
            'edit' => Pages\EditDocumentPersonal::route('/{record}/edit'),
        ];
    }
}
