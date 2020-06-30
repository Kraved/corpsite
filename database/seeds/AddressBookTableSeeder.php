<?php

use Illuminate\Database\Seeder;

class AddressBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i = 1; $i < 20; $i++) {
            $data[] = [
                'company' => 'Lex Systems',
                'full_name' => "$i",
                'number' => "123456",
                'add_number' => "10$i",
                'email' => "$i@lexsystems.ru",
                'cabinet' => "cabinet $i",
            ];
        }
        \Illuminate\Support\Facades\DB::table('address_books')->insert($data);
    }
}
