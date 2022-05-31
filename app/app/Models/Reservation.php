<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Reservation extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'table_id',
        'date',
        'guest_number'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
    ];

    /**
     * Sortable attributes.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'date',
        'email'
    ];

    /**
     * The table that belong to the reservation.
     */
    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    /**
     * Determines if the reservation can be edited.
     */
    public function canEdit()
    {
        return $this->date > now();
    }
}
