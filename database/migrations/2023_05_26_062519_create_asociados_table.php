<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsociadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociados', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('codigo');
            $table->string('nombre');
            $table->varchar('apellido');
            $table->varchar('direccion');
            $table->varchar('email');
            $table->integer('telefono1');
            $table->integer('telefono2');
            $table->timestamp('deleted_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asociados');
    }
}
