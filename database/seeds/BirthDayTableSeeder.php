<?php

use Illuminate\Database\Seeder;

class BirthDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 'text' =>
                <<<STR1
                    January

                     Сагалатый Иван Васильевич – 01.01.

                    Шуминов Натан – 11.01.

                    Секретарева Елена — 11.01.

                    Абрамов Тимур – 13.01.

                    Симоненко Ирина – 15.01.

                    Заваленкова Екатерина — 21.01.

                    Ходжабекян Лусине – 22.01.

                    Изотова Альбина – 25.01.
                STR1];

        \Illuminate\Support\Facades\DB::table('birth_days')->insert($data);
    }
}
