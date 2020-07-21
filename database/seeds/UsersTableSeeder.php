<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@corpsite',
                'password' => password_hash('admin', PASSWORD_DEFAULT)
            ],
            [
                'name' => 'manager',
                'email' => 'manager@corpsite',
                'password' => password_hash('manager', PASSWORD_DEFAULT)
            ],
            [
                'name' => 'user',
                'email' => 'user@corpsite',
                'password' => password_hash('user', PASSWORD_DEFAULT)
            ],

        ];
        \Illuminate\Support\Facades\DB::table('users')->insert($data);
    }
}
