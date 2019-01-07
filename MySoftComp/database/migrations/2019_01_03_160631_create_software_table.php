<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->longText('description');
            $table->integer('price');
            $table->integer('file_size');
            $table->string('platform');
            $table->integer('platform_count');
            $table->string('license');
            $table->string('imagedir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
}
