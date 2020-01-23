<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuridicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_lic', 25);
            $table->string('nombre_sociedad_anonima');
            $table->date('fecha_emision');
            $table->date('fecha_vencimiento'); 
            $table->string('suspendidos_cancel_hasta_la_fecha'); 
            $table->string('nombre_representante_legal'); 
            $table->string('email')->unique();
            $table->string('no_lic_pn',8); 
            $table->integer('reputacion'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juridicos');
    }
}
