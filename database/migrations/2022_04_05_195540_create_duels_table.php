<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duels', function (Blueprint $table) {
            $table->id();
            $table->integer('league_id');
            $table->dateTimeTz('dateHour');
            $table->string('clubHome');
            $table->integer('goalHome')->nullable();
            $table->string('clubVisit');
            $table->integer('goalVisit')->nullable();
            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.bb
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchs');
    }
};
