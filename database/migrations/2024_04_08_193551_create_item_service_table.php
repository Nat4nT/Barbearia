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
        Schema::create('item_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('selected_service_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign("selected_service_id")->references("id")->on("selected_service");
            $table->foreign("service_id")->references("id")->on("services");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_service');
    }
};
