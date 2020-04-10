<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStayInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stayInfos', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('duration');
            $table->string('start_day');
            $table->string('finish_day');
            $table->integer('room');
            $table->timestamps();
            $table->unsignedInteger('student_id'); 
            $table->foreign('student_id') 
                  ->references('id') 
                  ->on('students') 
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stayInfos');
    }
}
