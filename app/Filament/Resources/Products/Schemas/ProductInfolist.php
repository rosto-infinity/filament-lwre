<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Informations du produit")
                    ->schema([
                        TextEntry::make("name")
                            ->label("Nom du produit")
                            ->weight("bold")
                            ->color("primary"),
                        TextEntry::make("sku")
                            ->label("Référence du produit")
                            ->weight("bold")
                           
                            ->badge()->color("success"),
                        TextEntry::make("description")
                            ->label("Description du produit")
                            ->weight("bold")
                            ->color("primary"),
                ])->columnSpanFull(),
                Section::make("Stock et prix")
                    ->schema([
                        TextEntry::make("price")
                            ->label("Prix en FCFA")
                            ->icon(Heroicon::EnvelopeOpen)
                            ->iconPosition("after")
                            ->weight("bold")
                            ->color("primary"),
                        TextEntry::make("stock")
                            ->label("Stock")
                            ->weight("bold")
                            ->color("primary"),
                ])->columnSpanFull(),
                Section::make("Mediathèque et status")
                    ->schema([
                        Group::make()->schema([
                            ImageEntry::make("image")
                                ->disk("public")
                                ->label("Imge du produit"),  
                        ]),
                         Group::make()->schema([
                             IconEntry::make("is_active")
                                 ->label("Produit actif")
                                 ->boolean()                          
                                ->color("success"),
                             IconEntry::make("is_featured")
                                 ->label("Produit en vedette")
                                ->boolean()   
                                 ->color("success"),
                         ]),
                         Group::make()->schema([
                             TextEntry::make("created_at")
                             ->label("Date de creation du produit")
                             ->color("info")
                                 ->date('l m/d/Y') ,     
                             TextEntry::make("updated_at")
                             ->label("Date de mise à jour du produit")
                             ->color("success")
                             ->date('l m/d/Y') ,     
                         ])
                   ])->columns("3")
                   ->columnSpanFull(),
            ]);
    }
}
