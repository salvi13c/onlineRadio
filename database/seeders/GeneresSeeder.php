<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generes')->insert([
            'name' => 'Pop',
            'description' => 'Pop Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Rock',
            'description' => 'Rock Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Hip-Hop',
            'description' => 'Hip-Hop Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Country',
            'description' => 'Country Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Jazz',
            'description' => 'Jazz Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Indie',
            'description' => 'Indie Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'TopCharts',
            'description' => 'Top Charts Music'
        ]);
        DB::table('generes')->insert([
            'name' => 'Sports',
            'description' => 'Live sports and news'
        ]);
        DB::table('generes')->insert([
            'name' => 'News',
            'description' => 'News'
        ]);
    }
}
