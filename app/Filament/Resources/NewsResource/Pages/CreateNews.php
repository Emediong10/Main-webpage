<?php

namespace App\Filament\Resources\NewsResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\NewsResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('News Created')
        ->body('News created successfully.');
}

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['created_by'] = Auth::user()->id;
    return $data;
}
}
