<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Product::factory(50)->create();
        \App\Models\Order::factory(50)->create();
        \App\Models\OrderDetail::factory(200)->create();
    }
}
