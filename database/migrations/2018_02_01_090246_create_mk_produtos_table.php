<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMkProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mk_produtos', function(Blueprint $table)
		{
			$table->string('EAN', 20);
			$table->string('ADM', 5);
			$table->string('DESCRICAO', 100);
			$table->string('MARCA', 100);
			$table->string('CTL', 5);
			$table->string('IDP', 5);
			$table->integer('ID', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mk_produtos');
	}

}
