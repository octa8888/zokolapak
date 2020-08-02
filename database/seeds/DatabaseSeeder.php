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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TransactionHeaderSeeder::class);
        $this->call(TransactionDetailSeeder::class);
        $this->call(CartHeaderSeeder::class);
        $this->call(CartDetailSeeder::class);
    }
}
