<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert the constant days

        DB::table('days')->insert(
        [
            [
                'days' => 'monday'
            ],
            [
                'days' => 'tuesday'
            ],
            [
                'days' => 'wednesday'
            ],
            [
                'days' => 'thursday'
            ]
        ]
        );
    }
}
