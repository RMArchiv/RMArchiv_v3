<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logos', function (Blueprint $table) {
            $table->integer('votes_count');
            $table->integer('votes_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logos', function (Blueprint $table) {
            $table->dropColumn('votes_count');
            $table->dropColumn('votes_value');
        });
    }
}
