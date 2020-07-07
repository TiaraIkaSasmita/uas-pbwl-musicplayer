<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_track', function (Blueprint $table) {
            $table->increments('track_id');
            $table->string('track_name');
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')->references('artist_id')->on('tb_artist');
            $table->unsignedInteger('album_id');
            $table->foreign('album_id')->references('album_id')->on('tb_album');
            $table->string('time');
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
        Schema::dropIfExists('tb_track');
    }
}
