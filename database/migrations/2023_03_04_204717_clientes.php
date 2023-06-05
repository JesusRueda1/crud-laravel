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
        Schema::create('Ambientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Ambientes_id')->unsigned();
            $table->string('nombre');
            $table->bigInteger('documento');
            $table->timestamps();

            $table->foreign('Ambientes_id')->references('id')->on('Administrador');
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
