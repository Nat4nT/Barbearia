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
        Schema::create('selected_services', function (Blueprint $table) {
            $table->id();
            $table->double("total_value");
            $table->date('data');

            $table->foreignId("worker_id")->constrained('user')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained("user")->cascadeOnDelete();
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
        Schema::dropIfExists('selected_services');
    }
};
