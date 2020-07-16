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
        $data = [ 'text' => "<div>                        <b>Январь</b></div><div> Сагалатый Иван Васильевич – 01.01. <br></div><div>
    Шуминов Натан – 11.01. <br></div><div>Секретарева Елена — 11.01. <br></div><div>Абрамов Тимур – 13.01. <br></div><div>Симоненко Ирина – 15.01. <br></div><div>Заваленкова Екатерина — 21.01. <br></div><div>Ходжабекян Лусине – 22.01. <br></div><div>Изотова Альбина – 25.01. <br></div><div><br></div><div><b>Февраль</b></div><div><br><div> Сагалатый Иван Васильевич – 01.01. <br></div><div>
    Шуминов Натан – 11.01. <br></div><div>Секретарева Елена — 11.01. <br></div><div>Абрамов Тимур – 13.01. <br></div><div>Симоненко Ирина – 15.01. <br></div><div>Заваленкова Екатерина — 21.01. <br></div><div>Ходжабекян Лусине – 22.01. <br></div>Изотова Альбина – 25.01. </div>"];

        \Illuminate\Support\Facades\DB::table('birth_days')->insert($data);
    }
}
