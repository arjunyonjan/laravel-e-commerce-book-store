<?php
	class BooksTableSeeder extends Seeder{
		public function run(){

			DB::table('books')->delete();


			Book::create([
				'title' => 'Requim',
				'isbn' => '123',
				'price' => '13.40',
				'cover' => 'requim.jpg',
				'author_id' => 1
			]);

			Book::create([
				'title' => 'Twilight',
				'isbn' => '456',
				'price' => '15.40',
				'cover' => 'twilight.jpg',
				'author_id' => 2
			]);

			Book::create([
				'title' => 'Deception Point',
				'isbn' => '789',
				'price' => '16.40',
				'cover' => 'deception.jpg',
				'author_id' => 3
			]);
		}
	}

 ?>