<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateREDESATIVASMERCKTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('REDES_ATIVAS_MERCK', function(Blueprint $table)
		{
			$table->bigInteger('CNPJ')->nullable();
			$table->text('RAZÇO', 65535)->nullable();
			$table->text('FANTASIA', 65535)->nullable();
			$table->text('BANDEIRA', 65535)->nullable();
			$table->text('LOGRADOURO', 65535)->nullable();
			$table->text('RUA', 65535)->nullable();
			$table->integer('NUMERO')->nullable();
			$table->text('CIDADE', 65535)->nullable();
			$table->integer('CEP')->nullable();
			$table->text('UF', 65535)->nullable();
			$table->text('TELEFONE', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('REDES_ATIVAS_MERCK');
	}

}
