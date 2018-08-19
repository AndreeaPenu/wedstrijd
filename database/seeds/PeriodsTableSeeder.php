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
                'begin'=>'2018-08-10',
                'end'=>'2018-08-12'),
            array(
                'begin'=>'2018-08-13',
                'end'=>'2018-08-16'),
            array(
                'begin'=>'2018-08-17',
                'end'=>'2018-08-19'),
            array(
                'begin'=>'2018-08-20',
                'end'=>'2018-08-25'),
        ));
    }
}
