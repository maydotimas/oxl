<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerPurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer_purchase', function(Blueprint $table)
		{
			$table->foreign('customer_customer_id', 'fk_customer_purchase_customer1')->references('customer_id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('product_product_id', 'fk_customer_purchase_product1')->references('product_id')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer_purchase', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_purchase_customer1');
			$table->dropForeign('fk_customer_purchase_product1');
		});
	}

}
