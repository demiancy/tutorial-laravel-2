<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Table extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'guest_number',
        'status',
        'location',
    ];

    /**
     * Sortable attributes.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name',
        'status',
        'location',
        'guest_number',
    ];
}
