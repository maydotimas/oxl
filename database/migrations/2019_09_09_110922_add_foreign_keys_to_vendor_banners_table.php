<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVendorBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vendor_banners', function(Blueprint $table)
		{
			$table->foreign('vendor_id', 'fk_vendor_banners_vendor1')->references('vendor_id')->on('vendor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vendor_banners', function(Blueprint $table)
		{
			$table->dropForeign('fk_vendor_banners_vendor1');
		});
	}

}
