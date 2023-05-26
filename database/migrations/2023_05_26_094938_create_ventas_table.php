<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_probable');
            $table->dateTime('fecha_contacto');
            $table->string('acuerdo');
            $table->timestamp('deleted_at');
            $table->enum('estado_venta', ]);
            $table->integer('producto_id');
            $table->integer('asociado_id');
            $table->integer('users_id');
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
        Schema::drop('ventas');
    }
}
