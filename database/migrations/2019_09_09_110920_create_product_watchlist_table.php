<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductWatchlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_watchlist', function(Blueprint $table)
		{
			$table->integer('product_watchlist_id')->primary();
			$table->string('date', 45)->nullable();
			$table->integer('product_id')->index('fk_product_watchlist_product1_idx');
			$table->integer('customer_id')->index('fk_product_watchlist_customer1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_watchlist');
	}

}
