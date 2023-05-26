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
        Schema::table('venta', function (Blueprint $table) {
            $table->foreign(['asociado_id'], 'fk_venta_asociado1')->references(['id'])->on('asociado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['producto_id'], 'fk_venta_producto1')->references(['id'])->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['users_id'], 'fk_venta_users1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta', function (Blueprint $table) {
            $table->dropForeign('fk_venta_asociado1');
            $table->dropForeign('fk_venta_producto1');
            $table->dropForeign('fk_venta_users1');
        });
    }
};
