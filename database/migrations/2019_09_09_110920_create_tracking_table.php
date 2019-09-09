<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracking', function(Blueprint $table)
		{
			$table->integer('tracking_id')->primary();
			$table->string('tracking_date', 45)->nullable();
			$table->string('status', 45)->nullable();
			$table->string('remarks', 45)->nullable();
			$table->integer('customer_purchase_id')->index('fk_tracking_customer_purchase1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tracking');
	}

}
