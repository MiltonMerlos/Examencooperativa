<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha_probable');
            $table->date('fecha_contacto');
            $table->string('acuerdo');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->enum('estado_venta', ['si', 'no']);
            $table->integer('producto_id')->index('fk_venta_producto1_idx');
            $table->integer('asociado_id')->index('fk_venta_asociado1_idx');
            $table->unsignedBigInteger('users_id')->nullable()->index('users_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};
