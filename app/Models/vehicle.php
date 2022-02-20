<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vehicle
 *
 * @property int $id
 * @property string $name
 * @property float $weekly_fee
 * @property float $daily_fee
 * @property string $transmission
 * @property int $capacity
 * @property int $baggage_space
 * @property bool $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Category|null $category
 * @method static \Database\Factories\VehicleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBaggageSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDailyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereTransmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereWeeklyFee($value)
 * @mixin \Eloquent
 */
class Vehicle extends Model
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
        'modal',
        'brand_id',
        'category',
        'weekly_fee',
        'daily_fee',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'brand_id' => 'integer',
        'category' => 'integer',
        'weekly_fee' => 'double',
        'daily_fee' => 'double',
        'status' => 'boolean',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
