<?php

	class Order extends Eloquent{
		protected $fillable = ['member_id', 'address', 'total'];

		public function orderItems(){
			return $this->belongsToMany('Book', 'order_tables')->withPivot('amount','price','total');
		}
	}

 ?>