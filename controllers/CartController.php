<?php

class CartController extends BaseController{

	public function __construct(){}

	public function getIndex(){
		$member_id = Auth::user()->id;

		$cart_books = Cart::with('Books')->where('member_id','=',$member_id)->get();
		$cart_total = Cart::with('Books')->where('member_id', '=', $member_id)->sum('total');

		return View::make('cart')
			->with('cart_books', $cart_books)
			->with('cart_total', $cart_total);

	}

	public function postIndex(){}

	public function postAddToCart(){

		//validation
		$rules = [
			'amount' => 'required|numeric',
			'book' => 'required|numeric|exists:books,id' //id exists in the books table
		];

		//inputs, rules
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()){
			return Redirect::route('index')->with('error', 'The book could not be added to your cart');
		}

		$member_id = Auth::user()->id;
		$book_id = Input::get('book');
		$amount = Input::get('amount');

		$book = Book::find($book_id);
		$total = $amount * $book->price;

		//checking existing in the cart
		$count = Cart::where('book_id','=',$book_id)
			->where('member_id','=',$member_id)
			->count();

		if($count){
			return Redirect::route('index')->with('error', 'The book already exists in your cart.');
		}

		Cart::create([
			'member_id' => $member_id,
			'book_id' => $book_id,
			'amount' => $amount,
			'total' => $total
		]);

		return Redirect::route('cart');
	}


	public function getDelete($id){
		$cart = Cart::find($id)->delete();

		return Redirect::route('cart');
	}

}

 ?>