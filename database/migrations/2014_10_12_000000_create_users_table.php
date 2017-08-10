<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ciudad');
            $table->string('habitacion');
            $table->text('description');
            $table->decimal('precio',8,2);
            $table->timestamps();
        });

        Schema::create('aerolineas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('origen');
            $table->string('destino');
            $table->date('salida');
            $table->string('horario');
            $table->integer('asientos');
            $table->decimal('precio',8,2);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type')->default("Viajero");
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('nacimiento');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('aerolinea_id')->unsigned();
            $table->integer('asientos');
            $table->integer('pago');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('aerolinea_id')->references('id')->on('aerolineas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoteles');
        Schema::dropIfExists('aerolineas');
        Schema::dropIfExists('reservacion');
        Schema::dropIfExists('users');
    }
}
