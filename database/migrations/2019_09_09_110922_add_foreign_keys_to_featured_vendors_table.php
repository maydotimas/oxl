<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeaturedVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('featured_vendors', function(Blueprint $table)
		{
			$table->foreign('vendor_id', 'fk_featured_vendors_vendor1')->references('vendor_id')->on('vendor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('featured_vendors', function(Blueprint $table)
		{
			$table->dropForeign('fk_featured_vendors_vendor1');
		});
	}

}
