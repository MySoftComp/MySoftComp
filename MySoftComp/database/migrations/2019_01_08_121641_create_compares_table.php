<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateComparesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('code');
            $table->string('name1');
            $table->integer('price1');
            $table->integer('file_size1');
            $table->string('platform1');
            $table->integer('platform_count1');
            $table->string('license1');
            $table->string('imagedir1');
            $table->string('name2');
            $table->integer('price2');
            $table->integer('file_size2');
            $table->string('platform2');
            $table->integer('platform_count2');
            $table->string('license2');
            $table->string('imagedir2');
            $table->string('Suggest');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compares');
    }
}