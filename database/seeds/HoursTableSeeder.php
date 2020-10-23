<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert(
        [
            [
                'hours' => '9'
            ],
            [
                'hours' => '11'
            ],
            [
                'hours' => '1'
            ],
            [
                'hours' => '3'
            ]
        ]
        );
    }
}
