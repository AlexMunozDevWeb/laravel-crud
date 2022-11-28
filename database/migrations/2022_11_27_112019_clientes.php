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
      Schema::create( 'clientes', function (Blueprint $table) {
        $table->id();
        $table->string( 'nombre', 60);
        $table->string( 'NIF', 10);
        $table->string( 'poblacion', 50);
        $table->integer( 'CP' );
        $table->timestamp( 'fecha_alta' );
      } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('clientes');
    }
};
