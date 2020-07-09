<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
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
        for ($i = 0; $i < 30; $i++) {
            $author = rand(1, 2);
            $data[] = [
                'title' => $faker->text(50),
                'text' => $faker->realText(200),
                'user_id' => $author,
                'published' => $faker->boolean(60),
                'created_at' => $faker->dateTimeBetween('-1 Year'),
            ];
        }

        \Illuminate\Support\Facades\DB::table('news')->insert($data);
    }
}
