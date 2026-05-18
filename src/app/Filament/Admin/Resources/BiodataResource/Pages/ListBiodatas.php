<?php

namespace App\Filament\Admin\Resources\BiodataResource\Pages;

use App\Filament\Admin\Resources\BiodataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiodatas extends ListRecords
{
    protected static string $resource = BiodataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
