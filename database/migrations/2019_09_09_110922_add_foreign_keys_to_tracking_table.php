<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tracking', function(Blueprint $table)
		{
			$table->foreign('customer_purchase_id', 'fk_tracking_customer_purchase1')->references('customer_purchase_id')->on('customer_purchase')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tracking', function(Blueprint $table)
		{
			$table->dropForeign('fk_tracking_customer_purchase1');
		});
	}

}
