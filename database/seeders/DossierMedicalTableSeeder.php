<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DossierMedicalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DossierMedical::factory(10)->create();
    }
}
