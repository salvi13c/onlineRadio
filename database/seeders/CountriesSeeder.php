<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Spain',
            'continent' => 'Europe',
            'language' => 'Spanish',
        ]);
        DB::table('countries')->insert([
            'name' => 'France',
            'continent' => 'Europe',
            'language' => 'Francais',
        ]);
        DB::table('countries')->insert([
            'name' => 'Germany',
            'continent' => 'Europe',
            'language' => 'German',
        ]);
        DB::table('countries')->insert([
            'name' => 'Italy',
            'continent' => 'Europe',
            'language' => 'Italian',
        ]);
        
    }
}
