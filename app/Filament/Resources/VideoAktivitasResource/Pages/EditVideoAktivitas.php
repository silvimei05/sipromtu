<?php

namespace App\Filament\Resources\VideoAktivitasResource\Pages;

use App\Filament\Resources\VideoAktivitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideoAktivitas extends EditRecord
{
    protected static string $resource = VideoAktivitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
