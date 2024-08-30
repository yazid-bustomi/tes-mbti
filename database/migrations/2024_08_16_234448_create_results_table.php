<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('dimension_id')->references('id')->on('dimensions')->onDelete('cascade');
            $table->string('result_type');
            $table->integer('introved');
            $table->integer('extroverted');
            $table->integer('intuition');
            $table->integer('sensing');
            $table->integer('thinking');
            $table->integer('feeling');
            $table->integer('judging');
            $table->integer('perceiving');
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
        Schema::dropIfExists('results');
    }
}
