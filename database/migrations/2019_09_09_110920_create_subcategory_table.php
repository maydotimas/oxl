<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcategory', function(Blueprint $table)
		{
			$table->integer('subcategory_id')->primary();
			$table->string('subcategory_name', 45)->nullable();
			$table->integer('category_category_id')->index('fk_subcategory_category1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subcategory');
	}

}
