<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropHomeworldColumnFromSpecies extends Migration
{
    public function up()
    {
        Schema::table('species', function (Blueprint $table) {
            $table->dropColumn('homeworld');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('species', function (Blueprint $table) {
            $table->string('homeworld')->nullable();
        });
    }
}
