<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRecommendations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recommendations', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_show');
            $table->foreign('id_show')->references('id')->on('shows')->onDelete('cascade');

            $table->unsignedBigInteger('id_recommendation_status');
            $table->foreign('id_recommendation_status')->references('id')->on('recommendation_statuses')->onDelete('cascade');

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
        Schema::table('recommendations', function (Blueprint $table) {
            //
        });
    }
}
