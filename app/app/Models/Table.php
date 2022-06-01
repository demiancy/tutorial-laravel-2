<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Enums\TableStatus;

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
        'table_location_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => TableStatus::class,
    ];

    /**
     * Sortable attributes.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name',
        'status',
        'table_location_id',
        'guest_number',
    ];

    /**
     * The location to which the table belongs.
     */
    public function location()
    {
        return $this->belongsTo(TableLocation::class, 'table_location_id');
    }
}
