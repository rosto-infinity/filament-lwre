<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Group;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                //########################## Design 01
                // Section::make("Informations du produit")
                //     ->schema([
                //         TextEntry::make("name")
                //             ->label("Nom du produit")
                //             ->weight("bold")
                //             ->color("primary"),
                //         TextEntry::make("sku")
                //             ->label("Référence du produit")
                //             ->weight("bold")

                //             ->badge()->color("success"),
                //         TextEntry::make("description")
                //             ->label("Description du produit")
                //             ->weight("bold")
                //             ->color("primary"),
                // ])->columnSpanFull(),
                // Section::make("Stock et prix")
                //     ->schema([
                //         TextEntry::make("price")
                //             ->label("Prix en FCFA")
                //             ->icon(Heroicon::EnvelopeOpen)
                //             ->iconPosition("after")
                //             ->weight("bold")
                //             ->color("primary"),
                //         TextEntry::make("stock")
                //             ->label("Stock")
                //             ->weight("bold")
                //             ->color("primary"),
                // ])->columnSpanFull(),
                //  Section::make("Mediathèque et status")
                //     ->schema([
                //         Group::make()->schema([
                //             ImageEntry::make("image")
                //                 ->disk("public")
                //                 ->label("Imge du produit"),  
                //         ]),
                //          Group::make()->schema([
                //              IconEntry::make("is_active")
                //                  ->label("Produit actif")
                //                  ->boolean()                          
                //                 ->color("success"),
                //              IconEntry::make("is_featured")
                //                  ->label("Produit en vedette")
                //                 ->boolean()   
                //                  ->color("success"),
                //          ]),
                //          Group::make()->schema([
                //              TextEntry::make("created_at")
                //              ->label("Date de creation du produit")
                //              ->color("info")
                //                  ->date('l m/d/Y') ,     
                //              TextEntry::make("updated_at")
                //              ->label("Date de mise à jour du produit")
                //              ->color("success")
                //              ->date('l m/d/Y') ,     
                //          ])
                //    ])->columns("3")
                //    ->columnSpanFull(),


                //#################----------Design 02
                 Tabs::make("Tabs")
                  ->tabs([
                     Tab::make("Information du produit")
                     ->icon(Heroicon::Envelope)
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
                     ]),
                       Tab::make("Stock et prix")->schema([
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
                     ]),
                       Tab::make("Mediathèque et status")     ->schema([
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
                   ])->columns("3"),
                 ])->columnSpanFull(),  

                //#################----------Design 03
                //    Tabs::make("Tabs")
                //      ->vertical()     // <--- C'EST ICI QUE LE STYLE VERTICAL EST APPLIQUÉ
                //      ->columnSpanFull()
                //      ->tabs([
                //         Tab::make("Information du produit")
                //          ->icon('heroicon-m-information-circle') // Ajout d'icônes pour un style vertical plus clair
                //         ->schema([
                //              TextEntry::make("name")
                //                 ->label("Nom du produit")
                //                 ->weight("bold") // Utilisation de l'Enum
                //                 ->color("primary"),
                //             TextEntry::make("sku")
                //                 ->label("Référence du produit")
                //                ->weight("bold")
                //                 ->badge()->color("success"),
                //             TextEntry::make("description")
                //                 ->label("Description du produit")
                //                ->weight("bold")
                //                 ->color("primary"),
                //         ]),
                //           Tab::make("Stock et prix")
                //           ->icon('heroicon-m-currency-euro')
                //           ->schema([
                //             TextEntry::make("price")
                //                 ->label("Prix en FCFA")
                //                 // Utilisez la chaîne de caractères si vous n'importez pas l'Enum Heroicon
                //                 ->icon('heroicon-s-envelope-open') 
                //                 ->iconPosition("after")
                //                ->weight("bold")
                //                 ->color("primary"),
                //             TextEntry::make("stock")
                //                 ->label("Stock")
                //                ->weight("bold")
                //                 ->color("primary"),
                //         ]),
                //           Tab::make("Médiathèque et status")
                //           ->icon('heroicon-m-photo')
                //           ->schema([
                //            Group::make()->schema([
                //                ImageEntry::make("image")
                //                    ->disk("public")
                //                    ->label("Image du produit"),  
                //            ]),
                //             Group::make()->schema([
                //                 IconEntry::make("is_active")
                //                     ->label("Produit actif")
                //                     ->boolean()                          
                //                    ->color("success"),
                //                 IconEntry::make("is_featured")
                //                     ->label("Produit en vedette")
                //                    ->boolean()   
                //                     ->color("success"),
                //             ]),
                //             Group::make()->schema([
                //                 TextEntry::make("created_at")
                //                 ->label("Date de création du produit")
                //                 ->color("info")
                //                     ->date('l m/d/Y') ,     
                //                 TextEntry::make("updated_at")
                //                 ->label("Date de mise à jour du produit")
                //                 ->color("success")
                //                 ->date('l m/d/Y') ,     
                //             ])
                //          ])->columns("3"),
                //      ]), 

                //#################----------Design 04 : Style Sections Rétractables (Collapsible Sections)
                // Section::make("Information du produit")
                //     ->icon('heroicon-m-information-circle')
                //     ->description("Détails essentiels et identification du produit.")
                //     ->collapsible() // Rend la section rétractable (cliquable pour ouvrir/fermer)
                //     ->collapsed(false) // Optionnel: Commence ouvert par défaut
                //     ->schema([
                //         TextEntry::make("name")
                //             ->label("Nom du produit")
                //             ->weight("bold")
                //             ->color("primary"),
                //         TextEntry::make("sku")
                //             ->label("Référence du produit")
                //             ->weight("bold")
                //             ->badge()->color("success"),
                //         TextEntry::make("description")
                //             ->label("Description du produit")
                //             ->weight("bold")
                //             ->color("primary"),
                //     ]),

                // Section::make("Stock et prix")
                //     ->icon('heroicon-m-currency-euro')
                //     ->description("Gestion de l'inventaire et tarification.")
                //     ->collapsible()
                //     ->collapsed(true) // Optionnel: Commence fermé pour gagner de la place
                //     ->schema([
                //         TextEntry::make("price")
                //             ->label("Prix en FCFA")
                //             ->icon('heroicon-s-envelope-open')
                //             ->iconPosition("after")
                //             ->weight("bold")
                //             ->color("primary"),
                //         TextEntry::make("stock")
                //             ->label("Stock")
                //             ->weight("bold")
                //             ->color("primary"),
                //     ]),

                // Section::make("Médiathèque et status")
                //     ->icon('heroicon-m-photo')
                //     ->description("Images, visibilité et horodatage.")
                //     ->collapsible()
                //     ->collapsed(true) // Optionnel: Commence fermé
                //     ->schema([
                //         // Le contenu interne à la section peut toujours utiliser des colonnes
                //         Group::make()->columns(3)->schema([
                //             Group::make()->schema([
                //                 ImageEntry::make("image")
                //                     ->disk("public")
                //                     ->label("Image du produit"),
                //             ]),
                //             Group::make()->schema([
                //                 IconEntry::make("is_active")
                //                     ->label("Produit actif")
                //                     ->boolean()
                //                     ->color("success"),
                //                 IconEntry::make("is_featured")
                //                     ->label("Produit en vedette")
                //                     ->boolean()
                //                     ->color("success"),
                //             ]),
                //             Group::make()->schema([
                //                 TextEntry::make("created_at")
                //                     ->label("Date de création du produit")
                //                     ->color("info")
                //                     ->date('l m/d/Y'),
                //                 TextEntry::make("updated_at")
                //                     ->label("Date de mise à jour du produit")
                //                     ->color("success")
                //                     ->date('l m/d/Y'),
                //             ])->columns(1), // Maintient les dates alignées verticalement
                //         ]),
                //  ]),



                
     ]);
    }
}
