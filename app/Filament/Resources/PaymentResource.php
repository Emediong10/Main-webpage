<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Payment;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PaymentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PaymentResource\RelationManagers;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Payment Section')
                    ->description('')
                    ->schema([
                        TextInput::make('first_name'),
                        TextInput::make('last_name'),
                        TextInput::make('email'),
                        TextInput::make('amount')->label('Amount paid in naira'),
                        TextInput::make('trans_reference'),
                        TextInput::make('trans_status'),
                        TextInput::make('description') ->label('payment description'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('first_name')
               ->searchable()->sortable() 
               ->copyable()
               ->copyMessage('Firstname copied')
               ->copyMessageDuration(1500),

               TextColumn::make('last_name')
               ->searchable()->sortable()
               ->copyable()
               ->copyMessage('Lastname copied')
               ->copyMessageDuration(1500),
               
               TextColumn::make('email')
              ->searchable()
              ->sortable()
               ->copyable()
               ->copyMessage('email copied')
               ->copyMessageDuration(1500)
               ->icon('heroicon-m-envelope')
               ->iconColor('success'),

               TextColumn::make('amount')
             ->searchable()
             ->sortable()
               ->icon('heroicon-o-check-badge')
                ->iconColor('success'),

               TextColumn::make('trans_reference')
               ->label('transaction reference')
              ->searchable()
              ->sortable()
                ->copyable()
               ->copyMessage('Transaction reference copied')
               ->copyMessageDuration(1500),
            
     TextColumn::make('trans_status')
    ->label('Transaction Status')
   ->sortable()
    ->formatStateUsing(function ($state) {
        return $state === 'success' ? 'Successful Transaction' : 'Failed Transaction';
    })
    ->icon(function ($state) {
        return $state === 'success' 
            ? 'heroicon-o-check-badge' 
            : 'heroicon-o-x-circle';
    })
    ->iconColor(function ($state) {
        return $state === 'success' 
            ? 'success' 
            : 'danger';
    })
    ->color(function ($state) {
        return $state === 'success' 
            ? 'success' 
            : 'danger';
    }),
 TextColumn::make('description')->searchable()->sortable(),
 TextColumn::make('created_at')->label('Transaction created time')
 ->dateTime('l M j, Y: h:i:A')
 ->searchable()
 ->sortable(),
//  TextColumn::make('updated_at')->label('Transaction updated at')
//  ->dateTime('l M j, Y: h:i:A')
//  ->searchable()
//  ->sortable()

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
