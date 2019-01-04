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
        $this->call(UsersTableSeeder::class);
        $this->call(OneRowPageTableSeeder::class);
        $this->call(HomeNumberTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(MphimTableSeeder::class);
    }
}
