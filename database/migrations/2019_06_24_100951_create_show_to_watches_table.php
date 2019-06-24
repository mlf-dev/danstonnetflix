<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowToWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showToWatches', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('id_show');
            $table->foreign('id_show')->references('id')->on('shows')->onDelete('cascade');

            $table->unsignedBigInteger('id_user_who_recommends')->nullable();
            $table->foreign('id_user_who_recommends')->references('id')->on('users')->onDelete('set null');

            Schema::enableForeignKeyConstraints();

            $table->primary(['id_user','id_show']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show_to_watches');
    }
}
