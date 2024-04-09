<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('type', function (Blueprint $table) {
            $table->id();
            $table->string("type_name");
            $table->timestamps();
        });

        DB::table('type')->insert([
            ['id'=>1, 'type_name'=>'comum_user'],
            ['id'=>2, 'type_name'=>'barber_user'],
            ['id'=>3, 'type_name'=>'boss_user'],
            ['id'=>4, 'type_name'=>'super_admin'],
            ['id'=>5, 'type_name' =>'loyalty_user']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type');
    }
};
