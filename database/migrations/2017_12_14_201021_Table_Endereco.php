<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEndereco extends Migration
{
    /* /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('enderecos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('RUA');
          $table->string('LOGRADOURO');
          $table->string('CIDADE');
            $table->string('NUMERO');
     
      });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
