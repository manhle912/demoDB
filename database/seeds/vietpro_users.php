<?php

use Illuminate\Database\Seeder;

class vietpro_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vietpro_users')->insert([
            'user_name' => 'admin',
            'user_pass' => md5(123456),
            'user_level'=>1
        ]);
    }
}
