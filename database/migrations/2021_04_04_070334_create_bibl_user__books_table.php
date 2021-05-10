<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiblUserBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibl_users__books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_book');
            $table->unsignedInteger('id_user');
            $table->foreign('id_book')->references('id')->on('books');
            $table->foreign('id_user')->references('id')->on('bibl_users');
            $table->date('d_return');
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
        Schema::dropIfExists('bibl_users__books');
    }
}
