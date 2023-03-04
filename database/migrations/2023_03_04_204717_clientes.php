<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ciudades_id')->unsigned();
            $table->string('nombre');
            $table->bigInteger('documento');
            $table->timestamps();

            $table->foreign('ciudades_id')->references('id')->on('ciudades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
