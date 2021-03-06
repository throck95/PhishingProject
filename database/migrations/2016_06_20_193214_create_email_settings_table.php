<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('default_emailsettings', function(Blueprint $table)
		{
			$table->integer('DFT_UserId');
			$table->primary('DFT_UserId');
			$table->text('DFT_MailServer');
			$table->text('DFT_MailPort');
			$table->text('DFT_Username');
			$table->text('DFT_CompanyName');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('default_emailsettings');
	}

}
