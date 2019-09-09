<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerPurchaseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_purchase', function(Blueprint $table)
		{
			$table->integer('customer_purchase_id')->primary();
			$table->string('qty', 45)->nullable();
			$table->string('date_ordered', 45)->nullable();
			$table->string('date_delivered', 45)->nullable();
			$table->string('status', 45)->nullable();
			$table->string('total_amount', 45)->nullable();
			$table->string('discount_amount', 45)->nullable();
			$table->string('discount_coupon', 45)->nullable();
			$table->string('is_shopping_cart', 45)->nullable();
			$table->integer('product_product_id')->index('fk_customer_purchase_product1_idx');
			$table->integer('customer_customer_id')->index('fk_customer_purchase_customer1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_purchase');
	}

}
