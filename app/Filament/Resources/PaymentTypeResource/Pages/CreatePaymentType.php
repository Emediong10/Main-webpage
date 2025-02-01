<?php

namespace App\Filament\Resources\PaymentTypeResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PaymentTypeResource;

class CreatePaymentType extends CreateRecord
{
    protected static string $resource = PaymentTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Payment type Created')
        ->body('The Payment type has been created successfully.');
}
}
