<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class topChartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topcharts')->insert([
            'song' => 'Test Song 1',
            'artist' => 'Test 1',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 2',
            'artist' => 'Test 2',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 3',
            'artist' => 'Test 3',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 4',
            'artist' => 'Test 4',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 5',
            'artist' => 'Test 5',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 6',
            'artist' => 'Test 6',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 7',
            'artist' => 'Test 7',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 8',
            'artist' => 'Test 8',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 9',
            'artist' => 'Test 9',
            'genere' => '1',
        ]);
        DB::table('topcharts')->insert([
            'song' => 'Test Song 10',
            'artist' => 'Test 10',
            'genere' => '1',
        ]);
    }
}
