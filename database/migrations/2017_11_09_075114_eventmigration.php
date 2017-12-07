<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventmigration extends Migration
{
   
  

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('banner');
             $table->string('logo');
             $table->string('venue');
             $table->time('start');
             $table->time('end');
             $table->dateTime('date');
             $table->mediumText('decription');
             $table->unsignedBigInteger('state_id')->nullable();
             $table->string('state')->nullable;
             //$table->foreign('state_id')->references('id')->on('states');//->onDelete('restrict')->onUpdate('cascade');
             $table->unsignedBigInteger('user_id')->nullable();
                 //$table->foreign('user_id')->references('id')->on('users');//->onDelete('restrict')->onUpdate('cascade');
             $table->unsignedBigInteger('category_id')->nullable();
                 //$table->foreign('category_id')->references('id')->on('categories');//->onDelete('restrict')->onUpdate('cascade');
              $table->string('category')->nullable();
            
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
        //
        Schema::dropIfExists('events');
    }
}
