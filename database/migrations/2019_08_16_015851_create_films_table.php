<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('episode_id')->unsigned();
            $table->string('film_url')->unique();
            $table->string('title');
            $table->string('director');
            $table->string('producer');
            $table->string('release_date');
            $table->text('opening_crawl');
            $table->boolean('favourited')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
}
