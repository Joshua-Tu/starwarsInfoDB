<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarshipsTable extends Migration
{
    public function up()
    {
        Schema::create('starships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('starship_url')->unique();
            $table->string('name');
            $table->string('model');
            $table->string('starship_class');
            $table->string('cost_in_credits');
            $table->string('manufacturer');
            $table->string('length');
            $table->string('crew');
            $table->string('passengers');
            $table->string('max_atmosphering_speed');
            $table->string('hyperdrive_rating');
            $table->string('MGLT');
            $table->string('cargo_capacity');
            $table->string('consumables');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('starships');
    }
}
