<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductWatchlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_watchlist', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_product_watchlist_customer1')->references('customer_id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('product_id', 'fk_product_watchlist_product1')->references('product_id')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_watchlist', function(Blueprint $table)
		{
			$table->dropForeign('fk_product_watchlist_customer1');
			$table->dropForeign('fk_product_watchlist_product1');
		});
	}

}
