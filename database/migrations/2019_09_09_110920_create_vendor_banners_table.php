<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendor_banners', function(Blueprint $table)
		{
			$table->integer('vendor_banner_id')->primary();
			$table->string('banner_name', 45)->nullable();
			$table->string('banner_path', 45)->nullable();
			$table->integer('vendor_id')->index('fk_vendor_banners_vendor1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendor_banners');
	}

}
