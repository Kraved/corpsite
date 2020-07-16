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
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 60; $i++) {
            $data[] = [
                'company' => 'Lex Systems',
                'full_name' => "$faker->firstName $faker->lastName",
                'number' => $faker->e164PhoneNumber,
                'add_number' => "10$i",
                'email' => $faker->email,
                'cabinet' => "cabinet $i",
            ];
        }
        \Illuminate\Support\Facades\DB::table('address_books')->insert($data);
    }
}
