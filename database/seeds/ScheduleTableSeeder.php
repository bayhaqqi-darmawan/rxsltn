<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert(
            [
                [
                    'days_id' => '1',
                    'hours_id' => '1',
                    'place' => 'Bandar Seri Begawan'
                ],
                [
                    'days_id' => '1',
                    'hours_id' => '2',
                    'place' => 'Bandar Seri Begawan'
                ],
                [
                    'days_id' => '1',
                    'hours_id' => '3',
                    'place' => 'Bandar Seri Begawan'
                ],
                [
                    'days_id' => '1',
                    'hours_id' => '4',
                    'place' => 'Bandar Seri Begawan'
                ],
                [
                    'days_id' => '2',
                    'hours_id' => '1',
                    'place' => 'Belait'
                ],
                [
                    'days_id' => '2',
                    'hours_id' => '2',
                    'place' => 'Belait'
                ],
                [
                    'days_id' => '2',
                    'hours_id' => '3',
                    'place' => 'Belait'
                ],
                [
                    'days_id' => '2',
                    'hours_id' => '4',
                    'place' => 'Belait'
                ],
                [
                    'days_id' => '3',
                    'hours_id' => '1',
                    'place' => 'Tutong'
                ],
                [
                    'days_id' => '3',
                    'hours_id' => '2',
                    'place' => 'Tutong'
                ],
                [
                    'days_id' => '3',
                    'hours_id' => '3',
                    'place' => 'Tutong'
                ],
                [
                    'days_id' => '3',
                    'hours_id' => '4',
                    'place' => 'Tutong'
                ],
                [
                    'days_id' => '4',
                    'hours_id' => '1',
                    'place' => 'Temburong'
                ],
                [
                    'days_id' => '4',
                    'hours_id' => '2',
                    'place' => 'Temburong'
                ],
                [
                    'days_id' => '4',
                    'hours_id' => '4',
                    'place' => 'Temburong'
                ],
                [
                    'days_id' => '4',
                    'hours_id' => '4',
                    'place' => 'Temburong'
                ],

            ]
            );
    }
}
