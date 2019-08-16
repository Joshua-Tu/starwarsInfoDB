<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('character_url')->unique();
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('birth_year');
            $table->string('eye_color');
            $table->string('hair_color')->nullable();
            $table->string('skin_color');
            $table->string('height');
            $table->string('mass');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
