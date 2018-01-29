<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
        	['name'=>'admin','email'=>'phanthang230696hn@gmail.com','password'=>Hash::make('123456')],
        	['name'=>'author','email'=>'author@gmail.com','password'=>Hash::make('123456')]
        ];
        DB::table('users')->insert($users);
    }
}
