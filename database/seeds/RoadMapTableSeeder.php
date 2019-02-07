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
            'date' => Carbon::parse('2008-12-23'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2012-06-15'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2014-08-17'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2015-04-18'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

		Roadmap::create([
            'date' => Carbon::parse('2016-05-13'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2017-01-11'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2018-05-11'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);

        Roadmap::create([
            'date' => Carbon::parse('2018-04-11'),
            'body_en' => 'RoadMap Body EN',
            'body_de' => 'RoadMap Body DE',
            'body_fr' => 'RoadMap Body FR',
            'body_it' => 'RoadMap Body IT',
            'body_rs' => 'RoadMap Body RS',
        ]);
    }
}
