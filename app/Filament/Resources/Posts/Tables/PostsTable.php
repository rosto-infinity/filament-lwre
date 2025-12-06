<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make("image")
                 ->circular()
                ->disk("public"),
                TextColumn::make("title")->label('Le titre')->sortable(),
                TextColumn::make("slug")->sortable(),
                TextColumn::make("category.name"),
                TextColumn::make("created_at")->label('Date de creation')->dateTime(),
                ToggleColumn::make("published"),
                ColorColumn::make('color')->label('Couleur'),
                TextColumn::make("tags"),
            ])->defaultSort('title','asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                   DeleteAction::make()
                 ->successNotification(
       Notification::make()
            ->success()
             ->title('Artile supprimé')
    ->body('L\'article a été supprimé avec succès.'),
                 )
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
