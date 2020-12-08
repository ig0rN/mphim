<?php

use Illuminate\Database\Seeder;
use App\Database\OneRowPage;

class OneRowPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OneRowPage::create([
            'page' => 'versions',
            'body_en' => 'Versions Body EN',
            'body_de' => 'Versions Body DE',
            'body_fr' => 'Versions Body FR',
            'body_it' => 'Versions Body IT',
            'body_rs' => 'Versions Body RS',
        ]);
        OneRowPage::create([
            'page' => 'commercial',
            'body_en' => 'Commercial Body EN',
            'body_de' => 'Commercial Body DE',
            'body_fr' => 'Commercial Body FR',
            'body_it' => 'Commercial Body IT',
            'body_rs' => 'Commercial Body RS',
        ]);

        OneRowPage::create([
            'page' => 'management',
            'body_en' => 'Commercial Body EN',
            'body_de' => 'Commercial Body DE',
            'body_fr' => 'Commercial Body FR',
            'body_it' => 'Commercial Body IT',
            'body_rs' => 'Commercial Body RS',
        ]);

        OneRowPage::create([
            'page' => 'reference',
            'body_en' => 'Commercial Body EN',
            'body_de' => 'Commercial Body DE',
            'body_fr' => 'Commercial Body FR',
            'body_it' => 'Commercial Body IT',
            'body_rs' => 'Commercial Body RS',
        ]);

        OneRowPage::create([
            'page' => 'home',
            'body_en' => 'Home Body EN',
            'body_de' => 'Home Body DE',
            'body_fr' => 'Home Body FR',
            'body_it' => 'Home Body IT',
            'body_rs' => 'Home Body RS',
        ]);
    }
}
