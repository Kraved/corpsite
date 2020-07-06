<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Яндекс', 'url' => 'yandex.ru'],
            ['name' => 'Mail', 'url' => 'mail.ru'],
            ['name' => 'Twitch', 'url' => 'twitch.tv'],
        ];
        \Illuminate\Support\Facades\DB::table('links')->insert($data);
    }
}
