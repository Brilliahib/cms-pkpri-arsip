<?php

namespace App\Filament\Resources;

use App\Models\LoanDocument;
use App\Models\OtherMail;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DokumenUspPusatResource extends Resource
{
    protected static ?string $model = LoanDocument::class;

    protected static ?string $navigationLabel = 'Dokumen Usp Pusat';
    protected static ?string $navigationGroup = 'Dokumen Pinjaman';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereHas('category', fn($query) => $query->where('name', 'Dokumen Usp Pusat'));
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->label('Judul')->required(),
            Select::make('category_id')
                ->relationship('category', 'name')
                ->label('Kategori')
                ->required(),
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
                TextColumn::make('title')->label('Judul')->sortable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\IconColumn::make('file_path')
                    ->label('File')
                    ->icon('heroicon-o-document-text')
                    ->color('primary')
                    ->url(fn(LoanDocument $record): ?string => $record->file_path ? asset('storage/' . $record->file_path) : null)
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
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\DokumenUspPusatResource\Pages\ListDokumenUspPusats::route('/'),
            'create' => \App\Filament\Resources\DokumenUspPusatResource\Pages\CreateDokumenUspPusat::route('/create'),
            'edit' => \App\Filament\Resources\DokumenUspPusatResource\Pages\EditDokumenUspPusat::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Dokumen Usp Pusat';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Dokumen Usp Pusat';
    }
}
