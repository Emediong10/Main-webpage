<?php

namespace App\Filament\Resources;


use Filament\Forms;
use App\Models\News;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
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
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\NewsResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use App\Filament\Resources\NewsResource\RelationManagers;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([


                        Card::make()
                            ->schema([

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
                                    ->dehydrated(),


                            ])
                            ->columns(2),


                    MarkdownEditor::make('content')->label('News Content')->fileAttachmentsDirectory('media')->required(),
                    CuratorPicker::make('image_id')
                         ->required()
                         ->label('Featured Image')
                         ->relationship('image', 'id'),


                        Card::make()
                            ->schema([
                                TextInput::make('author')->label('News Author'),
                                DatePicker::make('published_at')
                                ->label('Publishing date')
                                ->required(),
                            ])
                            ->columns(2),


                     TagsInput::make('seo_tags')->label('SEO Tags')->required(),
                    Textarea::make('meta_description')
                       ->label('Meta Description'),


                    Toggle::make('active')->helperText('Inactive News will not be displayed and will be automatically archived'),
                    Repeater::make('viewable_by')
                    ->schema([
                        Select::make('users')
                        ->label('Select users')
                        ->multiple()
                        ->searchable()
                        ->preload()
                        ->options(function(){
                            return User::get()->pluck('name','id');
                        }),

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
                TextColumn::make('title')->label('News Title'),
                TextColumn::make('author')->label('News Author'),
                TextColumn::make('slug')->label('URL Slug'),
                CuratorColumn::make('image_id')
                         ->label('Image')
                         ->size(40),
                TextColumn::make('created_by')
                    ->label('Created By')
                    ->getStateUsing(function(News $record){
                    if($record->created_by !=null)
                    {
                        return $record->who_created->name;
                    }
                    else
                    {
                        return "NULL";
                    }
               }),
                IconColumn::make('active')->options([
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
