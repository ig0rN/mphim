<?php

use Illuminate\Database\Seeder;
use App\Database\Mphim;

class MphimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Mphim::create([
            'name' => 'What is',
            'body_en' => 'Mphim Body EN',
            'body_de' => 'Mphim Body DE',
            'body_fr' => 'Mphim Body FR',
            'body_it' => 'Mphim Body IT',
            'body_rs' => 'Mphim Body RS',
        ]);
        Mphim::create([
            'name' => 'What does it do',
            'body_en' => 'Mphim Body EN',
            'body_de' => 'Mphim Body DE',
            'body_fr' => 'Mphim Body FR',
            'body_it' => 'Mphim Body IT',
            'body_rs' => 'Mphim Body RS',
        ]);
        Mphim::create([
            'name' => 'Why to have it',
            'body_en' => 'Mphim Body EN',
            'body_de' => 'Mphim Body DE',
            'body_fr' => 'Mphim Body FR',
            'body_it' => 'Mphim Body IT',
            'body_rs' => 'Mphim Body RS',
        ]);
    }
}
