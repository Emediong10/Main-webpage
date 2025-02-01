<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PaymentType;
use Illuminate\Support\Str;
use App\Models\PaymentCategory;
// use Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\MarkdownEditor;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use App\Filament\Resources\PaymentTypeResource\Pages;
use App\Filament\Resources\PaymentTypeResource\RelationManagers;

class PaymentTypeResource extends Resource
{
    protected static ?string $model = PaymentType::class;

    protected static ?string $navigationGroup = 'Payment Section';


    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Payment Type Details')

                ->schema([
                 Section::make('')
                    ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(30)
                    ->unique(function($context){
                        if($context==="edit")
                        {
                            return false;
                        }
                    })->afterStateUpdated(function(string $operation, $state, Set $set){
                        if ($operation !== 'create'){
                            return;
                        }
                        $set('slug', Str::slug($state));

                     })
                    ->debounce('500ms')
                    ->live(onBlur: true)
                    ->label('News Title'),
                    TextInput::make('slug')
                    ->dehydrated() ,
                            ])->columns(2),


                    Section::make('')
                        ->schema([
                            Select::make('payment_category_id')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->options(PaymentCategory::all()->pluck('name', 'id')),


                            TextInput::make('target_amount')
                            ->numeric()
                            ->required()
                            ->prefix('NGN')
                            ->label('Target Amount'),

                                ])
                                ->columns(2),


                           MarkdownEditor::make('content'),

                           CuratorPicker::make('image_id')
                           ->label('Featured Image')
                           ->relationship('image', 'id'
                           )->required(),

                            Toggle::make('active'),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->sortable()

                ->searchable(),
                TextColumn::make('slug')->label('URL Slug'),
                CuratorColumn::make('image.id')
                         ->label('Image')
                         ->size(60),
            Tables\Columns\TextColumn::make('target_amount')
                ->money('NGN')
                ->sortable(),
            Tables\Columns\TextColumn::make('amount_paid')
                ->money('NGN')
                ->sortable(),
            Tables\Columns\ImageColumn::make('image'),
            BooleanColumn::make('active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPaymentTypes::route('/'),
            'create' => Pages\CreatePaymentType::route('/create'),
            'edit' => Pages\EditPaymentType::route('/{record}/edit'),
        ];
    }
}
