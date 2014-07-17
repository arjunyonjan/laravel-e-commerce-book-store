<?php

	class Author extends Eloquent{
		protected $fillable = ['name', 'surname'];

		public function Books(){
			return $this->hasMany('Book');
		}
	}

 ?>