<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_links', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user_first');
            $table->foreign('id_user_first')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('id_user_last');
            $table->foreign('id_user_last')->references('id')->on('users')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
            $table->primary(['id_user_first','id_user_last']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_links');
    }
}
