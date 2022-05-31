<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Menu extends Model
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
        'price',
        'description',
        'image'
    ];

    /**
     * Sortable attributes.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name',
        'price'
    ];

    /**
     * The categories that belong to the menu.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
