<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BookAddon
 *
 * @property-read BookAddon|null $addon
 * @property-read \App\Models\Book|null $book
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @method static \Database\Factories\BookAddonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon query()
 * @mixin \Eloquent
 */
class BookAddon extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id',
        'addon_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book_id' => 'integer',
        'addon_id' => 'integer',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function addon()
    {
        return $this->belongsTo(\App\Models\bookAddon::class);
    }
}
