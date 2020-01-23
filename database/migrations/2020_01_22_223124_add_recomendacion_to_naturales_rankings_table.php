<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecomendacionToNaturalesRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naturales_rankings', function (Blueprint $table) {
         
            $table->decimal('recomendacion', 5, 2)->after('calificacion');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naturales_rankings', function (Blueprint $table) {
            $table->dropColumn('recomendacion');
        });
    }
}
