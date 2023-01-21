<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Worksheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksheet', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->text('desc')->nullable();
            $table->string('startTime')->nullable();
            $table->string('finishTime')->nullable();
            $table->string('EffectiveTime')->nullable();
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
        schema::dropIfExists('suppliers');

    }
}
