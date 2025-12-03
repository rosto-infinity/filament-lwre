<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('name'),
               TextColumn::make('email'),
               TextColumn::make('Actions'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                RestoreAction::make(),
                DeleteAction::make()
                 ->successNotification(
       Notification::make()
            ->success()
             ->title('Utilisateur supprimé')
    ->body('L\'utilisateur a été supprimé avec succès.'),
    )
                ])
                ->toolbarActions([
                    RestoreBulkAction::make(),
                    BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
