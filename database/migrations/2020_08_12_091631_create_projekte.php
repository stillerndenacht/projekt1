<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projekte', function (Blueprint $table) {
            $table->id("Projekt_ID");
            $table->unsignedBigInteger("worker_ID");
            $table->foreign("worker_ID")->references("worker_ID")->on('worker');
            $table->string("Kürzel");
            $table->integer("Gesamtzeit");
            $table->dateTimeTz("Deadline");
            $table->timestamps();
        });
    }

    /**
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projekte');
    }
}
