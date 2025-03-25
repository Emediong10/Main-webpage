<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\EventType;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\EventResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationGroup = 'Event';

    protected static ?string $navigationIcon = 'heroicon-o-arrows-pointing-in';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                    ->required()
                    ->maxLength(40)
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
                    // ->disabled()
                    ->dehydrated(),

                    Select::make('event_type_id')
                    ->label('Select Event Type')
                    ->preload()
                    ->searchable()
                    ->options(EventType::all()->pluck('name', 'id')),

                   MarkdownEditor::make('content')->label('News Content')->required(),
                    CuratorPicker::make('image_id')
                         ->label('Featured Image')
                         ->relationship('image', 'id'
                         )->required()
                        //  ->maxSize(10)

                         ,
                    TextInput::make('author')->label('News Author'),
                    TextArea::make('meta_description')
                       ->label('Meta Description')->required(),

                    Toggle::make('is_general')->helperText('Should this events be accessbile to the Home Page or other News snippet pages'),
                    Toggle::make('active')
                    ->live()
                    ->default(false)
                    ->helperText('Inactive Events will not be displayed and will be automatically archived'),

                    Select::make('event_status')
                    ->options([
                        '0'=> 'is pass Event',
                        '1'=> 'is ongoing Event',
                        '2' => 'is upcoming event'
                    ])->required()
                    ->visible(function(Get $get){
                        if($get('active')==true){
                         return true;
                        }
                         return false;
                        }),
                    DatePicker::make('start_date')
                //    -> minDate(now())
                   ->prefix('Start Date')
                     ->visible(function(Get $get){
                        if($get('active')==true){
                         return true;
                        }
                         return false;
                        }),
                    DatePicker::make('end_date')
                    // ->maxDate(now())
                    ->prefix('End date')
                     ->visible(function(Get $get){
                        if($get('active')==true){
                         return true;
                        }
                         return false;
                        }),
                    TimePicker::make('start_time')
                        ->visible(function(Get $get){
                        if($get('active')==true){
                         return true;
                        }
                         return false;
                        }),

                        TextInput::make('venue')->required(),

                        Select::make('created_by')
                        ->preload()
                        ->searchable()
                        ->options(User::all()->pluck('name', 'id')),

                    Repeater::make('viewable_by')
                    ->schema([
                        Select::make('users')
                        ->label('Select users')
                        ->multiple()
                        ->searchable()
                        ->preload()
                        ->options(function(){
                            return User::all()->pluck('name','id');
                        })

                     ])
                    ->disableItemCreation()
                    ->disableItemDeletion()
                    ->disableItemMovement()

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Event Title'),
                TextColumn::make('event_type.name')->label('Event Type'),
                TextColumn::make('author')->label('Event Author')->icon('heroicon-m-user'),
                TextColumn::make('slug')->label('URL Slug'),
                CuratorColumn::make('image.id')
                         ->label('Image')
                         ->size(60),
                TextColumn::make('created_by')
                    ->label('Created By')
                    ->getStateUsing(function(Event $record){
                    if($record->created_by !=null)
                    {
                        return $record->who_created->name;
                    }
                    else
                    {
                        return "NULL";
                    }
               }),
               TextColumn::make("start_date"),
               TextColumn::make('end_date'),
               TextColumn::make('start_time')->dateTime('h:i:A'),
               TextColumn::make('end_time')->dateTime('h:i:A'),
               IconColumn::make('is_general')->options([
                'heroicon-o-x-circle' => fn($state, $record): bool => $record->is_general ==false,
                'heroicon-o-check-circle' => fn($state, $record): bool => $record->is_general ==true,
                ])
                ->colors([
                    'danger'=> fn($state, $record): bool => $record->is_general ==false,
                    'success' => fn($state, $record): bool => $record->is_general ==true
                ]),
                IconColumn::make('active')->label('Active Event')->options([
                    'heroicon-o-x-circle' => fn($state, $record): bool => $record->active ==false,
                    'heroicon-o-check-circle' => fn($state, $record): bool => $record->active ==true,
                    ])
                    ->colors([
                        'danger'=> fn($state, $record): bool => $record->active ==false,
                        'success' => fn($state, $record): bool => $record->active ==true
                    ]),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
            ])
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
            RelationManagers\CommentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
