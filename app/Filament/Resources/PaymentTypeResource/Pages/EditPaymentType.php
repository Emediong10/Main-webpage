<?php

namespace App\Filament\Resources\PaymentTypeResource\Pages;

use App\Filament\Resources\PaymentTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentType extends EditRecord
{
    protected static string $resource = PaymentTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getUpdatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Payment type Updated')
        ->body('The Payment type has been updated successfully.');
}


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
