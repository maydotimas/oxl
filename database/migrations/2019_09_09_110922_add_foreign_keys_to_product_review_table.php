<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_review', function(Blueprint $table)
		{
			$table->foreign('purchase_id', 'fk_product_review_customer_purchase1')->references('customer_purchase_id')->on('customer_purchase')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_review', function(Blueprint $table)
		{
			$table->dropForeign('fk_product_review_customer_purchase1');
		});
	}

}
