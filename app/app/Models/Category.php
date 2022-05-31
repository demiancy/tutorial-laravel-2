<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Category extends Model
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
        'image',
        'description',
    ];

    /**
     * Sortable attributes.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name'
    ];

    /**
     * The menus that belong to the category.
     */
    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
