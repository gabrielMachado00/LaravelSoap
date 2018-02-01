<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('RUA', 191);
			$table->string('LOGRADOURO', 191);
			$table->string('CIDADE', 191);
			$table->integer('NUMERO');
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->string('BAIRRO', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enderecos');
	}

}
