<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Project::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->rows(3)
                    ->required(),

                Forms\Components\Textarea::make('problem_analysis')
                    ->label('Analisis Masalah & Kebutuhan')
                    ->rows(6)
                    ->required(),

                Forms\Components\Textarea::make('system_requirements')
                    ->label('Arsitektur & Kebutuhan Sistem')
                    ->rows(5)
                    ->required(),

                Forms\Components\Textarea::make('tech_stack')
                    ->label('Tech Stack')
                    ->helperText('Pisahkan dengan koma, misal Laravel, PHP, MySQL, Livewire')
                    ->rows(4)
                    ->required(),

                Forms\Components\Textarea::make('design_diagram')
                    ->label('Diagram ERD / Flowchart')
                    ->helperText('Masukkan HTML atau teks diagram sederhana. Akan ditampilkan langsung di halaman proyek.')
                    ->rows(6),

                Forms\Components\FileUpload::make('report_pdf')
                    ->label('Laporan PDF')
                    ->directory('reports')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(10240),

                Forms\Components\Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'review' => 'Review',
                    ])
                    ->default('draft')
                    ->required(),

                Forms\Components\Toggle::make('is_final_report')
                    ->label('Laporan Akhir')
                    ->helperText('Tandai jika ini adalah laporan awal / final project akhirmu.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),

                TextColumn::make('short_description')->limit(80),

                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'review' => 'Review',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                        'review' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('is_final_report')
                    ->label('Laporan Akhir')
                    ->badge()
                    ->formatStateUsing(fn ($state): string => $state ? 'Ya' : 'Tidak')
                    ->color(fn ($state): string => $state ? 'success' : 'gray'),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->dateTime('d M Y'),
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
            ]);
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}