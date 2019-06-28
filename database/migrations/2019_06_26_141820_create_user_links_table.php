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
            $table->timestamps();


            $table->unsignedBigInteger('current_user_id');
            $table->foreign('current_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('second_user_id');
            $table->foreign('second_user_id')->references('id')->on('users')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
            $table->primary(['current_user_id','second_user_id']);

            $table->boolean('confirmed')->default(false);
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
