<?php

	class Book extends Eloquent{
		protected $fillable = ['title', 'isbn', 'cover', 'price', 'author_id'];

		public function Author(){
			return $this->belongsTo('Author');
		}
	}

 ?>