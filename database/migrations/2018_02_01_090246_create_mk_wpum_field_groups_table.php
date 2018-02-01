<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMkWpumFieldGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mk_wpum_field_groups', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 150);
			$table->text('description', 16777215);
			$table->bigInteger('group_order')->default(0);
			$table->boolean('can_delete')->index('can_delete');
			$table->boolean('is_primary')->default(0)->index('is_primary');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mk_wpum_field_groups');
	}

}
