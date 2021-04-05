<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id_cta');
            $table->string('num_cta',20)->unique();
            $table->enum('tipo_cta',['Ahorro','Corriente']);
            $table->integer('id_tit_cta');
            $table->integer('id_banco_cta');
            $table->timestamps();
            $table->integer('id_user_mod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}
