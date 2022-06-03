<?php

use App\Enums\TableStatus;

return [

    /*
    |--------------------------------------------------------------------------
    | Emuns Language Lines
    |--------------------------------------------------------------------------
    |
    |
    */

    TableStatus::class => [
        TableStatus::Pending     => 'Pendiente',
        TableStatus::Available   => 'Disponible',
        TableStatus::Unavailable => 'Indisponible',
    ],

];
