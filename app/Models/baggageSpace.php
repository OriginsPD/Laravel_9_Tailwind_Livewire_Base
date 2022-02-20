<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BaggageSpace
 *
 * @property-read \App\Models\VehicleDetail|null $vehicleDetails
 * @method static \Database\Factories\BaggageSpaceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace query()
 * @mixin \Eloquent
 */
class BaggageSpace extends Model
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
        'vehicleDetails_id',
        'large',
        'medium',
        'small',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicleDetails_id' => 'integer',
    ];

    public function vehicleDetails()
    {
        return $this->belongsTo(VehicleDetail::class);
    }
}
