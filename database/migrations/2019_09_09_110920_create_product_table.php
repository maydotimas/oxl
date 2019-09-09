<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('product_id')->primary();
			$table->string('name', 45)->nullable();
			$table->string('description', 45)->nullable();
			$table->string('color', 45)->nullable();
			$table->string('style', 45)->nullable();
			$table->string('dimensions', 45)->nullable();
			$table->string('weight', 45)->nullable();
			$table->string('amount', 45)->nullable();
			$table->string('is_discounted', 45)->nullable();
			$table->string('discount', 45)->nullable();
			$table->integer('vendor_id')->index('fk_product_vendor_idx');
			$table->integer('category_id')->index('fk_product_category1_idx');
			$table->integer('subcategory_id')->index('fk_product_subcategory1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
