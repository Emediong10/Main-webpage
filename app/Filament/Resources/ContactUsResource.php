<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\ContactUs;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContactUsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactUsResource\RelationManagers;

class ContactUsResource extends Resource
{

    protected static ?string $navigationLabel = 'Contact us';

    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('View Comments')->schema([


                    
                         Textarea::make('comment')->disabledOn('edit'),
                     ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->label('Firstname')->searchable(),
                TextColumn::make('lastname')->label('Lastname')->searchable(),
                TextColumn::make('email')->label('Email')->searchable(),
                 TextColumn::make('phone')->label('phone')->searchable(),
                 TextColumn::make('subject')->label('subject')->searchable(),
                TextColumn::make('created_at')->dateTime('l M j, Y: h:i:A'),
                 TextColumn::make('updated_at')->dateTime('l M j, Y: h:i:A'),

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
            'index' => Pages\ListContactUs::route('/'),
            'create' => Pages\CreateContactUs::route('/create'),
            'edit' => Pages\EditContactUs::route('/{record}/edit'),
        ];
    }
}