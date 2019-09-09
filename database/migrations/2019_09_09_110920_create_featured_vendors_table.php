<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturedVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('featured_vendors', function(Blueprint $table)
		{
			$table->integer('featured_vendor_id')->primary();
			$table->string('date_from', 45)->nullable();
			$table->string('date_to', 45)->nullable();
			$table->string('is_paid', 45)->nullable();
			$table->integer('vendor_id')->index('fk_featured_vendors_vendor1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('featured_vendors');
	}

}
