<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VehicleDetail
 *
 * @property-read \App\Models\BaggageSpace|null $baggageSpace
 * @property-read \App\Models\Vehicle $vehicle
 * @method static \Database\Factories\VehicleDetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail query()
 * @mixin \Eloquent
 */
class VehicleDetail extends Model
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
        'vehicle_id',
        'baggageSpace_id',
        'transmission',
        'capacity',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicle_id' => 'integer',
        'baggageSpace_id' => 'integer',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function baggageSpace()
    {
        return $this->belongsTo(BaggageSpace::class);
    }
}
