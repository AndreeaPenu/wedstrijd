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
                'begin'=>Carbon::yesterday(),
                'end'=>Carbon::now()->addHour(3)),
            array(
                'begin'=>Carbon::now()->addDays(7),
                'end'=>Carbon::now()->addDays(14)),
            array(
                'begin'=>Carbon::now()->addDays(21),
                'end'=>Carbon::now()->addDays(28)),
            array(
                'begin'=>Carbon::now()->addDays(35),
                'end'=>Carbon::now()->addDays(42)),
        ));
    }
}
