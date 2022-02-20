<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Addon
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @method static \Database\Factories\AddonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Addon extends Model
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
        'name',
        'description',
        'price',
        'amount',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'double',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
