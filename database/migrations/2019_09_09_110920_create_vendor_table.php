<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendor', function(Blueprint $table)
		{
			$table->integer('vendor_id')->primary();
			$table->string('name', 45)->nullable();
			$table->string('address', 45)->nullable();
			$table->string('vendorcol')->nullable();
			$table->string('mobile', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('image', 45)->nullable();
			$table->string('fb_link', 45)->nullable();
			$table->string('twitter_link', 45)->nullable();
			$table->string('ig_link', 45)->nullable();
			$table->string('linkedin_link', 45)->nullable();
			$table->integer('user_id')->index('fk_vendor_user1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendor');
	}

}
