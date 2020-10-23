<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['username'=>'Admin',
            'fullname'=>'Admin',
            'ic'=>'01012345',
            'phone_number'=>'8123456',
            'address'=>'Politeknik Brunei',
            'role'=>'admin',
            'email'=>'rotexsolution.pb@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'password'=>'123qweasdzxc']
        );
    }
}
