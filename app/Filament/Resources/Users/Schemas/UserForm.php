<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->helperText("Nom obligatoire"),
                TextInput::make('email')
                ->required(),
                TextInput::make('password')->password()
                ->autocomplete(false)
                ->revealable()
                ->required(),
            ]);
    }
}
