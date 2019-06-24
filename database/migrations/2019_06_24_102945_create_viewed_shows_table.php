<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewedShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewed_shows', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('id_show');
            $table->foreign('id_show')->references('id')->on('shows')->onDelete('cascade');

            $table->string('comment');

            $table->unsignedBigInteger('id_viewed_status');
            $table->foreign('id_viewed_status')->references('id')->on('viewed_statuses')->onDelete('cascade');

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
        Schema::dropIfExists('viewed_shows');
    }
}
