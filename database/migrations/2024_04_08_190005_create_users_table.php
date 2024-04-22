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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->integer('token');
            $table->unsignedBigInteger("type_id");
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("type_id")->references("id")->on("types");
        });

        DB::table('user')->insert([
            ['type_id' => 4, 'token'=>  rand(100000000,999999999), 'name'=>'Admin',
            'phone'=>'(45) 99848-2187','password'=>'$2y$10$221bqrtxwCQ8XS/dRPtqGOdE3SbbvKw41HQHaLV7ckDFtfOdld3Iq' , "email"=>'admin@gmail.com']
            ,['type_id' => 1, 'token'=>  rand(100000000,999999999), 'name'=>'Usuario',
            'phone'=>'(45) 99999-9999','password'=>'$2y$10$221bqrtxwCQ8XS/dRPtqGOdE3SbbvKw41HQHaLV7ckDFtfOdld3Iq' , "email"=>'teste@gmail.com']
            ,['type_id' => 2, 'token'=>  rand(100000000,999999999), 'name'=>'Barbeiro',
            'phone'=>'(45) 00000-0000','password'=>'$2y$10$221bqrtxwCQ8XS/dRPtqGOdE3SbbvKw41HQHaLV7ckDFtfOdld3Iq' , "email"=>'test3e@gmail.com']
            ,['type_id' => 3, 'token'=>  rand(100000000,999999999), 'name'=>'Boss',
            'phone'=>'(45) 11111-1111','password'=>'$2y$10$221bqrtxwCQ8XS/dRPtqGOdE3SbbvKw41HQHaLV7ckDFtfOdld3Iq' , "email"=>'te3ste@gmail.com']

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
