<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_review', function(Blueprint $table)
		{
			$table->integer('product_review_id')->primary();
			$table->string('subject', 45)->nullable();
			$table->string('description', 45)->nullable();
			$table->string('rating', 45)->nullable();
			$table->integer('purchase_id')->index('fk_product_review_customer_purchase1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_review');
	}

}
