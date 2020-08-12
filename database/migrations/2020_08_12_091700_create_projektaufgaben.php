<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjektaufgaben extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projektaufgaben', function (Blueprint $table) {
            $table->id("Aufgaben_ID");
            $table->unsignedBigInteger("worker_ID");
            $table->foreign("worker_ID")->references("worker_ID")->on('worker');
            $table->integer("KW");
            $table->longText("Aufgabenbeschreibung");
            $table->integer("Estimate");
            $table->datetimeTz("Deadline Aufgabe");
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
        Schema::dropIfExists('projektaufgaben');
    }
}
