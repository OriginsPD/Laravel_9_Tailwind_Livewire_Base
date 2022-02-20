<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property int $member_id
 * @property int $vehicle_id
 * @property string $pickup_location
 * @property \Illuminate\Support\Carbon $pickup_date
 * @property string $dropoff_location
 * @property \Illuminate\Support\Carbon $dropoff_date
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\Vehicle $vehicle
 * @method static \Database\Factories\BookFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDropoffDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDropoffLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePickupDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePickupLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereVehicleId($value)
 * @mixin \Eloquent
 */
class Book extends Model
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
        'client_id',
        'vehicle_id',
        'pickup_location',
        'pickup_date',
        'dropoff_location',
        'dropoff_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'vehicle_id' => 'integer',
        'pickup_date' => 'datetime',
        'dropoff_date' => 'datetime',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
