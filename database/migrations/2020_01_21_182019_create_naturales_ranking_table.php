<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalesRankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturales_rankings', function (Blueprint $table) {
           
    
            $table->bigIncrements('id');
            $table->string('no_lic_corredor', 25);
            $table->integer('user_qualifier_id');
            $table->integer('calificacion');
            $table->string('user_qualifier_comment', 250);
            $table->timestamps();
           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naturales_ranking');
    }
}
