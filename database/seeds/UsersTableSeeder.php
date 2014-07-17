<?php
	class UsersTableSeeder extends Seeder{
		public function run(){

			//clean up users table
			DB::table('users')->delete();

			User::create([
				'email' => 'member@email.com',
				'password'=>Hash::make('password'),
				'name'=> 'John Doe',
				'admin' => 0
			]);

			User::create([
				'email' => 'admin@store.com',
				'password'=>Hash::make('adminpassword'),
				'name'=> 'Jeniffer Taylor',
				'admin' => 1
			]);
		}
	}

 ?>