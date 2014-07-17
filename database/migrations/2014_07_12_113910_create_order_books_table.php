<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_tables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id');
			$table->integer('book_id');
			$table->integer('amount');
			$table->decimal('price',10,2);
			$table->decimal('total',10,2);
			$table->timestamps();


			//thanks for watching....... subscribe, share, like...............
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_tables');
	}

}
