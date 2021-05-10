<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookPublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book__publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_book');
            $table->unsignedInteger('id_publisher');
            $table->integer('year_edition');
            $table->foreign('id_book')->references('id')->on('books');
            $table->foreign('id_publisher')->references('id')->on('publishers');
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
        Schema::dropIfExists('book__publishers');
    }
}
