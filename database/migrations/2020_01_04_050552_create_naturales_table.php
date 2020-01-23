<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_lic_pn', 25);
            $table->integer('reputacion');
            $table->string('nombre_idoneidad');
            $table->string('email')->unique();
            $table->date('fecha_emision');
            $table->date('fecha_vencimiento'); 
            $table->string('status');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naturales');
    }
}
