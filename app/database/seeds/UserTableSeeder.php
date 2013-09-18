<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $password = Hash::make('admin');
        User::create([
        	'username' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => $password
    	]);
    }

}