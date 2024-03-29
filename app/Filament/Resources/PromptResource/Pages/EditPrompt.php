<?php

namespace App\Filament\Resources\PromptResource\Pages;

use App\Filament\Resources\PromptResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrompt extends EditRecord
{

    
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PromptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
