<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsImageColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('aerolineas', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
     Schema::table('aerolineas', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('hotels', function (Blueprint $table) {
               $table->dropColumn('image');
           });
    }
}
