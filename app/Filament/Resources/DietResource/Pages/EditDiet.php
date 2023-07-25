<?php

namespace App\Filament\Resources\DietResource\Pages;

use App\Filament\Resources\DietResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiet extends EditRecord
{
    protected static string $resource = DietResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
