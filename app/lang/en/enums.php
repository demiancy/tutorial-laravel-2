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
        TableStatus::Pending     => 'Pending',
        TableStatus::Available   => 'Available',
        TableStatus::Unavailable => 'Unavailable',
    ],

];