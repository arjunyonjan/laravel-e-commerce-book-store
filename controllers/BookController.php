<?php

class BookController extends BaseController{

	public function __construct(){}

	public function getIndex(){

		$books = Book::with('Author')->get();

		return View::make('book_list')->with('books', $books);

	}

	public function postIndex(){}

}

 ?>