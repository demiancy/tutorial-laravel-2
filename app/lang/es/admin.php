<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Administration Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the texts for admin views.
    |
    */
    
    'common' => [
        'actions' => 'Acciones',
        'edit'    => 'Editar',
        'delete'  => 'Eliminar',
        'new'     => 'Nuevo',
        'logout'  => 'Salir',
        'confirm' => [
            'delete' => '¿Estás seguro?'
        ],
    ],
    'layout' => [
        'title' => 'Administración'
    ],
    'nav' => [
        'dashboard'   => 'Dashboard',
        'category'    => 'Categorías',
        'menu'        => 'Menús',
        'table'       => 'Mesas',
        'reservation' => 'Reservaciones',
    ],
    'dashboard' => [
        'index' => [
            'title' => 'Dashboard',
        ]
    ],
    'category' => [
        'index' => [
            'title' => 'Categorías',
        ],
        'create' => [
            'title'   => 'Nueva categoría',
            'success' => 'Categoría creada con éxito'
        ],
        'edit'   => [
            'title'   => 'Edición de la categoría ":name"',
            'success' => 'Categoría actualizada con éxito'
        ],
        'delete' => [
            'success' => 'Categoría eliminada con éxito',
            'danger'  => 'La categoría no se puede eliminar'
        ],
        'action' => [
            'create' => 'Nueva categoría',
        ],
    ],
    'menu' => [
        'index' => [
            'title' => 'Menús',
        ],
        'create' => [
            'title'   => 'Nuevo menú',
            'success' => 'Menú creado con éxito'
        ],
        'edit'   => [
            'title'   => 'Edición del menu ":name"',
            'success' => 'Menú actualizado con éxito'
        ],
        'delete' => [
            'success' => 'Menú eliminado con éxito',
            'danger'  => 'El menú no se puede borrar'
        ],
        'action' => [
            'create' => 'Nuevo menú',
        ],
    ],
    'table' => [
        'index' => [
            'title' => 'Mesas',
        ],
        'create' => [
            'title'   => 'Nueva mesa',
            'success' => 'Mesa creada con éxito'
        ],
        'edit'   => [
            'title'   => 'Edición de la mesa ":name"',
            'success' => 'Mesa actualizada con éxito'
        ],
        'delete' => [
            'success' => 'Mesa eliminada con éxito',
            'danger'  => 'la mesa no se puede borrar'
        ],
        'action' => [
            'create' => 'Nueva mesa',
        ],
    ],
    'reservation' => [
        'index' => [
            'title' => 'Reservaciones',
        ],
        'create' => [
            'title'   => 'Nueva reservacion',
            'success' => 'Reservacion creada con éxito'
        ],
        'edit'   => [
            'title'   => 'Edición de la reservacion nro. :id',
            'success' => 'Reserva actualizada con éxito'
        ],
        'delete' => [
            'success' => 'Reservacion eliminada con éxito',
            'danger'  => 'La reservacion no se puede borrar'
        ],
        'action' => [
            'create' => 'Nueva reservacion',
        ],
    ],
];
