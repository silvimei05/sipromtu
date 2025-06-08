<?php

namespace App\Filament\Resources\FotoAktivitasResource\Pages;

use App\Filament\Resources\FotoAktivitasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFotoAktivitas extends CreateRecord
{
    protected static string $resource = FotoAktivitasResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
