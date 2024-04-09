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
        Schema::create('scheduled_time', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean("disponibility");
            $table->bigInteger("date_time_id")->unsigned();

            $table->foreign("date_time_id")->references("id")->on("date_time");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduled_time');
    }
};
