<?php

namespace App\Filament\Resources\FasilitasMedisResource\Pages;

use App\Filament\Resources\FasilitasMedisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasMedis extends EditRecord
{
    protected static string $resource = FasilitasMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
