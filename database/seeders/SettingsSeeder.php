<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'config_name' => 'rss_news_url',
            'description' => 'Link for rss of news list',
            'value' => 'https://www.billboard.com/feed/',
        ]);

        DB::table('settings')->insert([
            'config_name' => 'rss_top_charts_url',
            'description' => 'Link for rss of top charts list',
            'value' => 'https://rss.itunes.apple.com/api/v1/us/apple-music/top-songs/all/50/explicit.rss',
        ]);
    }
}
