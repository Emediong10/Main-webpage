<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Testimony;
use Filament\Tables\Table;
use Illuminate\Support\Str;
// use Filament\Forms\Components\ToggleButtons;

use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\TestimonyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestimonyResource\RelationManagers;

class TestimonyResource extends Resource
{
    protected static ?string $model = Testimony::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope-open';

    protected static ?string $navigationGroup = 'Event';

    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count();
}

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->description('This is the Testiony details and image page')
                    ->schema([
                        TextInput::make('subject')
                        ->required()
                        ->maxLength(255)
                        ->live()
                        ->debounce('500ms')
                       ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'edit' ? $set('slug', Str::slug($state)) : null),
                TextInput::make('slug')
                        ->required()
                        // ->disabled()
                        ->dehydrated()
                        ->unique(Testimony::class, 'slug', ignoreRecord:true),


                        FileUpload::make('image')
                            ->image()
                            ->directory('testimonies')
                            ->downloadable(),
                            MarkdownEditor::make('comment'),
                            Toggle::make('active')
                                ->onColor('success')
                                ->offColor('danger')
                                ->label('Click here to publish this testimony')

                    ])
                    // ->columns(2),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->searchable()->sortable(),
                TextColumn::make('lastname')->searchable()->sortable(),
                ImageColumn::make('image')
                ->label('image')
                ->size(40)
                ->width(100)
                ->height(50),
                TextColumn::make('slug')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('phone')->searchable()->sortable(),
                TextColumn::make('subject')->searchable()->sortable(),
                BooleanColumn::make('can_post'),
                BooleanColumn::make('active'),






            ])
            ->filters([
                //
            ])
             ->actions([
                    Tables\Actions\ActionGroup::make([
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
                        Tables\Actions\DeleteAction::make(),

                    ]),
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
            'index' => Pages\ListTestimonies::route('/'),
            'create' => Pages\CreateTestimony::route('/create'),
             'edit' => Pages\EditTestimony::route('/{record}/edit'),
        ];
    }
}
