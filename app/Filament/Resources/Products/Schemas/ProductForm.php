<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Checkbox;
use Filament\Schemas\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Forms\Components\MarkdownEditor;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make("Details du produit")
                        ->schema([
                            Group::make()
                              ->schema([

                                  TextInput::make("name")->required(),
                                  TextInput::make("sku"),
                              ])->columns(2),
                            MarkdownEditor::make("description")
                              ]),
                    Step::make("Stock et prix")
                        ->schema([
                            Group::make()
                              ->schema([

                                  TextInput::make("price")->rules(['required']),
                                  TextInput::make("stock")->rules(['required']),
                              ])->columns(2),        
                              ]),
                    Step::make("Status & Media")
                              ->schema([  
                                FileUpload::make("image")->disk("public")->directory("products"),
                                Checkbox::make("is_active"),    
                                Checkbox::make("is_featured"),    
                             ])
                ])
                ->columnSpanFull()
                ->skippable()
                ->submitAction(
                     Action::make("save")
                     ->label("Enregistrer le produit")
                     ->button()
                     ->color("primary")
                     ->submit("save")
                )
            ]);
    }
}
