<?php

namespace Database\Seeders;

use App\Models\Addon;
use App\Models\Book;
use App\Models\Member;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(AddonSeeder::class);
    }
}
