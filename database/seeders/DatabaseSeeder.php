<?php

namespace Database\Seeders;

use Database\Seeders\AddressSeeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddressSeeder::class,
            CompanySeeder::class,
            UserSeeder::class
        ]);

        DB::unprepared("REFRESH MATERIALIZED VIEW sales_commission_view");
    }
}
