<?php

class OrderController extends BaseController{

	public function __construct(){}

	public function getIndex(){

		$member_id = Auth::user()->id;

		$orders = Order::with('orderItems')-> where('member_id','=',$member_id)->get();

		return View::make('order')->with('orders', $orders);

	}

	public function postOrder(){

		$member_id = Auth::user()->id;

		$address = Input::get('address');

		$cart_books = Cart::with('Books')->where('member_id','=',$member_id)->get();
		$cart_total = Cart::with('Books')->where('member_id','=',$member_id)->sum('total');

		$order = Order::create([
			'member_id' => $member_id,
			'address'=> $address,
			'total' => $cart_total
		]);


		foreach($cart_books as $cart_book){
			$order->orderItems()->attach($cart_book->book_id, [
				'amount' => $cart_book->amount,
				'price'=> $cart_book->books->price,
				'total'=> $cart_book->books->price * $cart_book->amount
			]); //for other fields
		}

		Cart::where('member_id', '=', $member_id)->delete();

		return Redirect::route('index')->with('message', 'Your order processed successfully..');

	}

}

 ?>