<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section__books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_book');
            $table->unsignedInteger('id_section');
            $table->date('d_reg');
            $table->foreign('id_book')->references('id')->on('books');
            $table->foreign('id_section')->references('id')->on('sections');
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
        Schema::dropIfExists('section__books');
    }
}
