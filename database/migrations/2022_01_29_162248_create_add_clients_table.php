<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_clients', function (Blueprint $table) {
            $table->id();
            $table->string('Client_Name');
            $table->string('Shop_Name');            $table->string('Address_one');
            $table->string('Address_two');
            $table->string('Contact');
            $table->string('Locality');
            $table->string('City');
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
        Schema::dropIfExists('add_clients');
    }
}
