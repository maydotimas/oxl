<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subcategory', function(Blueprint $table)
		{
			$table->foreign('category_category_id', 'fk_subcategory_category1')->references('category_id')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subcategory', function(Blueprint $table)
		{
			$table->dropForeign('fk_subcategory_category1');
		});
	}

}
