<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name'        => 'Application Permit',
            'price'       => 500,
            'description' => 'Granting a permit for electronic applications operating on the network',
        ]);
    }
}
