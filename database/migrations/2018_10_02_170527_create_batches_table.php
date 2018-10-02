<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('batches'))
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
            $table->integer('course_id')->unsigned();

            $table->timestamps();
        });
        Schema::table('batches', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
