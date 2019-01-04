<?php

use Illuminate\Database\Seeder;
use App\Database\HomeNumber;

class HomeNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeNumber::create([
            'type' => 'students',
            'number' => 76,
            'mark' => ' m+',
        ]);
        HomeNumber::create([
            'type' => 'courses',
            'number' => 80,
            'mark' => 'k+',
        ]);
        HomeNumber::create([
            'type' => 'instructors',
            'number' => 990,
            'mark' => '+',
        ]);
    }
}
