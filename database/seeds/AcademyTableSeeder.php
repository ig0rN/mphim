<?php

use Illuminate\Database\Seeder;
use App\Database\Academy;

class AcademyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Academy::create([
            'name' => 'Academy',
            'body_en' => 'Academy Body EN',
            'body_de' => 'Academy Body DE',
            'body_fr' => 'Academy Body FR',
            'body_it' => 'Academy Body IT',
            'body_rs' => 'Academy Body RS',
        ]);
        Academy::create([
            'name' => 'Training4Company',
            'body_en' => 'Training4Company Body EN',
            'body_de' => 'Training4Company Body DE',
            'body_fr' => 'Training4Company Body FR',
            'body_it' => 'Training4Company Body IT',
            'body_rs' => 'Training4Company Body RS',
        ]);
        Academy::create([
            'name' => 'Training4Agent',
            'body_en' => 'Training4Agent Body EN',
            'body_de' => 'Training4Agent Body DE',
            'body_fr' => 'Training4Agent Body FR',
            'body_it' => 'Training4Agent Body IT',
            'body_rs' => 'Training4Agent Body RS',
        ]);
        Academy::create([
            'name' => 'Training4Advisor',
            'body_en' => 'Training4Advisor Body EN',
            'body_de' => 'Training4Advisor Body DE',
            'body_fr' => 'Training4Advisor Body FR',
            'body_it' => 'Training4Advisor Body IT',
            'body_rs' => 'Training4Advisor Body RS',
        ]);
        Academy::create([
            'name' => 'Training4Manager',
            'body_en' => 'Training4Manager Body EN',
            'body_de' => 'Training4Manager Body DE',
            'body_fr' => 'Training4Manager Body FR',
            'body_it' => 'Training4Manager Body IT',
            'body_rs' => 'Training4Manager Body RS',
        ]);
    }
}
