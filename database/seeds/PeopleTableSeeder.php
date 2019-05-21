<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'satou',
            'mail' => 'satou@kosyou.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'inori',
            'mail' => 'minase@inori.com',
            'age' => 23,
        ];
        DB::table('people')->insert($param);
    }
}
