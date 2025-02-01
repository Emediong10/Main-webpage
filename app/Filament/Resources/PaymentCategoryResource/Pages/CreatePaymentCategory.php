<?php

namespace App\Filament\Resources\PaymentCategoryResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PaymentCategoryResource;

class CreatePaymentCategory extends CreateRecord
{
    protected static string $resource = PaymentCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Payment Category Created')
        ->body('The Payment Category has been created successfully.');
}
}
