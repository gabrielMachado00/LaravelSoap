<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMkWpufTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mk_wpuf_transaction', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->bigInteger('user_id')->nullable();
			$table->string('status')->default('pending_payment');
			$table->string('cost')->nullable()->default('');
			$table->string('post_id', 20)->nullable();
			$table->bigInteger('pack_id')->nullable();
			$table->text('payer_first_name')->nullable();
			$table->text('payer_last_name')->nullable();
			$table->text('payer_email')->nullable();
			$table->text('payment_type')->nullable();
			$table->text('payer_address')->nullable();
			$table->text('transaction_id')->nullable();
			$table->dateTime('created');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mk_wpuf_transaction');
	}

}
