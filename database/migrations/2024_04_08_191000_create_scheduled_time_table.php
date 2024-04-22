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
        Schema::create('scheduled_times', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("hour_id")->unsigned();

            $table->foreign("hour_id")->references("id")->on("hours");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduled_times');
    }
};
