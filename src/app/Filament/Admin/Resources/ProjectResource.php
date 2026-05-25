<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

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
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Set $set) {
                        if ($operation === 'create') {
                            $set('slug', Str::slug($state));
                        }
                    }),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Project::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->rows(3)
                    ->required(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Thumbnail Project')
                    ->image()
                    ->directory('projects')
                    ->disk('public')
                    ->visibility('public'),

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
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->label('Judul Project')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->copyable()
                    ->limit(30),

                TextColumn::make('short_description')
                    ->label('Deskripsi')
                    ->limit(60)
                    ->wrap(),

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
                    ->label('Final Report')
                    ->badge()
                    ->formatStateUsing(fn ($state): string => $state ? 'Ya' : 'Tidak')
                    ->color(fn ($state): string => $state ? 'success' : 'gray'),

                TextColumn::make('report_pdf')
                    ->label('PDF')
                    ->formatStateUsing(fn ($state) => $state ? 'Ada File' : 'Tidak Ada')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'danger'),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
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