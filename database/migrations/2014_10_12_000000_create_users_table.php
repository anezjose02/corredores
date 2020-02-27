<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_role')->default('3');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('profile_picture')->default('avatar.jpg');
            $table->string('main_message')->default('Mensaje por defecto');
            $table->string('number_phone',20)->default('123456');
            $table->date('license_year')->default('2000/01/01');
            $table->string('address')->default('Direccion por defecto');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //Campos de las tablas Juridicos y Naturales 
            //Manera provicional
            //Campos Comunes
            $table->string('no_lic_pn', 25)->default('0');
            //$table->integer('reputacion')->unsigned()->default('0.00');
            $table->date('fecha_emision')->default('2000/01/01');
            $table->date('fecha_vencimiento')->default('2000/01/01');
            //Campos solo para usuarios "naturales"
            $table->string('nombre_idoneidad')->default('Ingre su Nombre');
            $table->string('status')->default('Defecto');
            //Campos solo para usuarios "juridicos"
            $table->string('no_lic', 25)->default('0');
            $table->string('nombre_sociedad_anonima')->default('Ingre su Nombre');
            $table->string('suspendidos_cancel_hasta_la_fecha')->default('0'); 
            $table->string('nombre_representante_legal')->default('Ingre su Nombre');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
