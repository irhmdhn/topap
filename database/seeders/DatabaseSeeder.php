<?php

namespace Database\Seeders;

use App\Models\ProductPrice;
use App\Models\User;
use Illuminate\Database\Seeder;

use function PHPUnit\Framework\callback;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ProductsSeeder::class);
        // $this->call(ProductPrice::class);

        // \App\Models\User::factory(10)->create();
    }
}
