<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('id_user_who_recommends');
            $table->foreign('id_user_who_recommends')->references('id')->on('users')->onDelete('cascade');

            $table->string('user_comment');

            $table->unsignedBigInteger('id_user_who_is_recommended');
            $table->foreign('id_user_who_is_recommended')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('is_movie')->default(true);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommendations');
    }
}
