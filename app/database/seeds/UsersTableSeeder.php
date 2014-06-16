<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$nuevo = new User;
    	$nuevo->username = 'admin';
    	$nuevo->password = Hash::make('admin');
    	$nuevo->save();
	}

}