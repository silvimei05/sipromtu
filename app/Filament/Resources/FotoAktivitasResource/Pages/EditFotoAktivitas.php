<?php

namespace App\Filament\Resources\FotoAktivitasResource\Pages;

use App\Filament\Resources\FotoAktivitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoAktivitas extends EditRecord
{
    protected static string $resource = FotoAktivitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
