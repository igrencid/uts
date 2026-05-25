<?php

namespace App\Filament\Admin\Widgets;

use App\Models\ContactMessage;
use App\Models\Education;
use App\Models\Project;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Project', Project::count())
                ->description('Jumlah seluruh project')
                ->color('success'),

            Stat::make('Total Skill', Skill::count())
                ->description('Skill yang dimiliki')
                ->color('info'),

            Stat::make('Total Education', Education::count())
                ->description('Riwayat pendidikan')
                ->color('warning'),

            Stat::make('Pesan Masuk', ContactMessage::count())
                ->description('Pesan dari contact form')
                ->color('danger'),
        ];
    }
}