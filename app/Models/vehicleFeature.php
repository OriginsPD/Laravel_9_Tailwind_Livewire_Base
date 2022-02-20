<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VehicleFeature
 *
 * @property-read VehicleFeature|null $feature
 * @property-read \Illuminate\Database\Eloquent\Collection|VehicleFeature[] $features
 * @property-read int|null $features_count
 * @property-read \App\Models\Vehicle $vehicle
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VehicleDetail[] $vehicleDetails
 * @property-read int|null $vehicle_details_count
 * @method static \Database\Factories\VehicleFeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature query()
 * @mixin \Eloquent
 */
class VehicleFeature extends Model
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
        'feature_id',
        'vehicle_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'feature_id' => 'integer',
        'vehicle_id' => 'integer',
    ];

    public function vehicleDetails()
    {
        return $this->hasMany(VehicleDetail::class);
    }

    public function features()
    {
        return $this->hasMany(\App\Models\vehicleFeature::class);
    }

    public function feature()
    {
        return $this->belongsTo(\App\Models\vehicleFeature::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
