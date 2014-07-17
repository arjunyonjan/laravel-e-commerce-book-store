<?php
	class AuthorsTableSeeder extends Seeder{
		public function run(){
			DB::table('authors')->delete();

			Author::create([
				'name' => 'Lauren',
				'surname' => 'Oliver'
			]);


			Author::create([
				'name' => 'Stephenie',
				'surname' => 'Meyer'
			]);

			Author::create([
				'name' => 'Dan',
				'surname' => 'Brown'
			]);
		}
	}

 ?>