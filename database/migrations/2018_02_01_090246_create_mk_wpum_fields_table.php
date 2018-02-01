<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMkWpumFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mk_wpum_fields', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('group_id')->unsigned()->index('group_id');
			$table->string('type', 150);
			$table->string('name', 150);
			$table->text('description');
			$table->bigInteger('field_order')->default(0)->index('field_order');
			$table->boolean('is_required')->default(0)->index('is_required');
			$table->boolean('show_on_registration')->default(0)->index('show_on_registration');
			$table->boolean('can_delete')->default(1)->index('can_delete');
			$table->string('default_visibility', 150)->default('public');
			$table->string('allow_custom_visibility', 150)->default('disallowed');
			$table->text('options')->nullable();
			$table->text('meta')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mk_wpum_fields');
	}

}
