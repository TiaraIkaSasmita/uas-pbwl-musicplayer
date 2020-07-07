<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlayedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_played', function (Blueprint $table) {
            $table->increments('played_id');
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')->references('artist_id')->on('tb_artist');
            $table->unsignedInteger('album_id');
            $table->foreign('album_id')->references('album_id')->on('tb_album');
            $table->unsignedInteger('track_id');
            $table->foreign('track_id')->references('track_id')->on('tb_track');
            $table->string('played');
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
        Schema::dropIfExists('tb_played');
    }
}
