<?php

use Illuminate\Database\Seeder;
use App\Database\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test',
            'email' => 'a@a.com',
            'password' => bcrypt('123123'),
        ]);
    }
}
