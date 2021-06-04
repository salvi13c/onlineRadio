<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('stations')->insert([
            'name' => 'Radio 1',
            'image' => 'https://www.albufera-energystorage.com/wp-content/uploads/2019/03/logo-rne.jpg',
            'genere' => '10',
            'country' => '1',
            'url' => 'https://addrad.io/4459dvr',
            'description' => 'Radio 1'
        ]);
    
        DB::table('stations')->insert([
            'name' => 'Los 40',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Los_40.svg/1200px-Los_40.svg.png',
            'genere' => '1',
            'country' => '1',
            'url' => 'https://playerservices.streamtheworld.com/api/livestream-redirect/LOS40.mp3',
            'description' => 'Los 40 principales'
        ]);
        DB::table('stations')->insert([
            'name' => 'Cadena Ser',
            'image' => 'https://mytuner.global.ssl.fastly.net/media/tvos_radios/e6xdJAvSZu.png',
            'genere' => '10',
            'country' => '1',
            'url' => 'https://playerservices.streamtheworld.com/api/livestream-redirect/CADENASER.mp3',
            'description' => 'Cadena Ser'
        ]);
        DB::table('stations')->insert([
            'name' => 'Radio marca',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/RadioMARCA.svg/1200px-RadioMARCA.svg.png',
            'genere' => '9',
            'country' => '1',
            'url' => 'https://playerservices.streamtheworld.com/api/livestream-redirect/RADIOMARCA_NACIONAL.mp3',
            'description' => 'Radio marca'
        ]);
    }
}
