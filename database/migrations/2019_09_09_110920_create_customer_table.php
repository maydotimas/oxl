<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table)
		{
			$table->integer('customer_id')->primary();
			$table->string('first_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->string('street', 45)->nullable();
			$table->string('town', 45)->nullable();
			$table->string('province', 45)->nullable();
			$table->string('mobile', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('user_user_id')->index('fk_customer_user1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
