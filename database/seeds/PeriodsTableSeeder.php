<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('periods')->delete();

        DB::table('periods')->insert(array(
            array(
                'begin'=>'2018-07-09',
                'end'=>'2018-07-15'),
            array(
                'begin'=>'2018-07-16',
                'end'=>'2018-07-22'),
            array(
                'begin'=>'2018-07-23',
                'end'=>'2018-07-31'),
            array(
                'begin'=>'2018-08-01',
                'end'=>'2018-08-06'),
        ));
    }
}
