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
            ['name' => 'Яндекс', 'url' => 'http://yandex.ru'],
            ['name' => 'Mail', 'url' => 'http://mail.ru'],
            ['name' => 'Twitch', 'url' => 'http://twitch.tv'],
        ];
        \Illuminate\Support\Facades\DB::table('links')->insert($data);
    }
}
