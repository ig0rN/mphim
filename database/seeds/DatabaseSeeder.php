<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = [
        'users',
        'one_row_page',
        'mphims',
        'roadmaps',
        'customers',
        'academies',
        'quotes',
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->toTruncate as $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }

        $this->call(UsersTableSeeder::class);
        $this->call(OneRowPageTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(MphimTableSeeder::class);
        $this->call(AcademyTableSeeder::class);
        $this->call(RoadMapTableSeeder::class);
    }
}
