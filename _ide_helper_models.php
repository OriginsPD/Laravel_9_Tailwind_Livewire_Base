<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 * @property int $amount
 * @method static \Illuminate\Database\Eloquent\Builder|Addon whereAmount($value)
 */
	class Addon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaggageSpace
 *
 * @property-read \App\Models\VehicleDetail|null $vehicleDetails
 * @method static \Database\Factories\BaggageSpaceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $vehicleDetails_id
 * @property int $large
 * @property int $medium
 * @property int $small
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace whereLarge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace whereSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaggageSpace whereVehicleDetailsId($value)
 */
	class BaggageSpace extends \Eloquent {}
}

namespace App\Models{
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
 * @property int $client_id
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereClientId($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
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
 * @property int $id
 * @property int $book_id
 * @property int $addon_id
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon whereAddonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookAddon whereId($value)
 */
	class BookAddon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $logo
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Client
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $books
 * @property-read int|null $books_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ClientFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property int $phone_no
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUserId($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $name
 * @property int $vehicle_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Database\Factories\FeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereVehicleId($value)
 * @mixin \Eloquent
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $f_name
 * @property string $l_name
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLName($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
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
 * @property string $modal
 * @property int $brand_id
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereModal($value)
 */
	class Vehicle extends \Eloquent {}
}

namespace App\Models{
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
 * @property int $id
 * @property int $vehicle_id
 * @property int $baggageSpace_id
 * @property string $transmission
 * @property int $capacity
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail whereBaggageSpaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail whereTransmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDetail whereVehicleId($value)
 */
	class VehicleDetail extends \Eloquent {}
}

namespace App\Models{
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
 * @property int $id
 * @property int $feature_id
 * @property int $vehicle_id
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFeature whereVehicleId($value)
 */
	class VehicleFeature extends \Eloquent {}
}

