<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('song_name',100);
            $table->string('artist',100);
            // $table->tinyInteger('category');は数字が入るのでシーダーの時に注意
            $table->tinyInteger('category');

            $table->string('img_file_name');
            $table->string('mp3_file_name');
        });
    }
//$table->string('file_name')->nullable(true);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
