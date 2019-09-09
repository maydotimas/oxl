<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_product_category1')->references('category_id')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('subcategory_id', 'fk_product_subcategory1')->references('subcategory_id')->on('subcategory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vendor_id', 'fk_product_vendor')->references('vendor_id')->on('vendor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->dropForeign('fk_product_category1');
			$table->dropForeign('fk_product_subcategory1');
			$table->dropForeign('fk_product_vendor');
		});
	}

}
