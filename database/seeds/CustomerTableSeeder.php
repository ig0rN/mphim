<?php

use Illuminate\Database\Seeder;
use App\Database\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Companies',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
        Customer::create([
            'name' => 'Professionals',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
        Customer::create([
            'name' => 'Trade associations',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
        Customer::create([
            'name' => 'Public institutions',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
        Customer::create([
            'name' => 'Schools',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
        Customer::create([
            'name' => 'University',
            'body_en' => 'Customer Body EN',
            'body_de' => 'Customer Body DE',
            'body_fr' => 'Customer Body FR',
            'body_it' => 'Customer Body IT',
            'body_rs' => 'Customer Body RS',
        ]);
    }
}
