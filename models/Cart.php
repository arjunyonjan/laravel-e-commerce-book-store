<?php

	class Cart extends Eloquent{
		protected $fillable = ['member_id', 'book_id', 'amount', 'total'];

		//cart relation to books
		public function Books(){
			return $this->belongsTo('Book', 'book_id');
		}
	}

 ?>