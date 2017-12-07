<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          

        Schema::table('events', function (Blueprint $table) {
        $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('category')->references('name')->on('categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('state')->references('name')->on('states')->onDelete('restrict')->onUpdate('cascade');

             //$table->unsignedBigInteger('user_id')->nullable();
                 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
                $table->dropForeign('user_id');
                $table->dropForeign('state_id');
        });
    }
}
