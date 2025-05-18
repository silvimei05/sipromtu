<?php

namespace App\Filament\Resources\VideoAktivitasResource\Pages;

use App\Filament\Resources\VideoAktivitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoAktivitas extends ListRecords
{
    protected static string $resource = VideoAktivitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
