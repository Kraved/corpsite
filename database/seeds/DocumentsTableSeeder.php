<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Regulation1', 'path' => 'storage/regulations/regulation1.txt', 'type' => 'regulations', 'user_id' => 1],
            ['name' => 'Regulation2', 'path' => 'storage/regulations/regulation2.txt', 'type' => 'regulations', 'user_id' => 1],
            ['name' => 'Regulation3', 'path' => 'storage/regulations/regulation3.txt', 'type' => 'regulations', 'user_id' => 2],
            ['name' => 'Template1', 'path' => 'storage/templates/template1.txt', 'type' => 'templates', 'user_id' => 1],
            ['name' => 'Template2', 'path' => 'storage/templates/template2.txt', 'type' => 'templates', 'user_id' => 2],
            ['name' => 'Template3', 'path' => 'storage/templates/template3.txt', 'type' => 'templates', 'user_id' => 1],
        ];


        \Illuminate\Support\Facades\DB::table('documents')->insert($data);
    }
}
