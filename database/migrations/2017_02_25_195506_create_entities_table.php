<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('position')->default('0 0 0');
            $table->string('rotation')->default('0 0 0');
            $table->text('value');
            $table->integer('scene_id')->unsigned();
            $table->foreign('scene_id')->references('id')->on('scenes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities');
    }
}
