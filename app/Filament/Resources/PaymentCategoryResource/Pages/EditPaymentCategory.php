<?php

namespace App\Filament\Resources\PaymentCategoryResource\Pages;

use App\Filament\Resources\PaymentCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentCategory extends EditRecord
{
    protected static string $resource = PaymentCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
