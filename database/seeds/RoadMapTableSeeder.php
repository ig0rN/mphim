<?php

use App\Database\Roadmap;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoadMapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roadmap::create([
            'date' => '23/12/2008',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '15/06/2012',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '17/08/2014',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '18/04/2015',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

		Roadmap::create([
            'date' => '13/05/2016',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '11/01/2017',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '11/05/2018',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => '11/04/2018',
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);
    }
}
