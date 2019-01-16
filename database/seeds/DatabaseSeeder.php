<?php

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
    	// Product::unguard();
        $this->call(ProductsTableSeeder::class);
        // Product::reguard();
    }
}
