<?php

use Illuminate\Database\Seeder;

class RecommendationStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $recommendation_status = new \App\RecommendationStatus();
        $recommendation_status->name = 'En attente';
        $recommendation_status->save();

        $recommendation_status = new \App\RecommendationStatus();
        $recommendation_status->name = 'A visionner plus tard';
        $recommendation_status->save();

        $recommendation_status = new \App\RecommendationStatus();
        $recommendation_status->name = 'Pas Intéressé pour le moment';
        $recommendation_status->save();

        $recommendation_status = new \App\RecommendationStatus();
        $recommendation_status->name = 'Visionné';
        $recommendation_status->save();

        $recommendation_status = new \App\RecommendationStatus();
        $recommendation_status->name = 'Série du moment';
        $recommendation_status->save();
    }
}
