<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulares', function (Blueprint $table) {
            $table->increments('id_tit');
            $table->string('nom_tit',80);
            $table->string('ci_tit',10)->unique();
            $table->string('tel_tit',14);
            $table->string('email_tit',70);
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
        Schema::dropIfExists('titulares');
    }
}
