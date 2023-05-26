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
        Schema::create('asociado', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('codigo', 50)->nullable()->unique('codigo_UNIQUE');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('direccion', 45);
            $table->string('email')->nullable();
            $table->integer('telefono1');
            $table->integer('telefono2');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at');
            $table->softDeletes();
            $table->string('codigo_no', 45)->unique('codigo_no_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asociado');
    }
};
