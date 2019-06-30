<?php

use Illuminate\Database\Seeder;

class ViewedStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $viewed_status = new \App\ViewedStatus();
        $viewed_status->name = 'En attente';
        $viewed_status->save();

        $viewed_status2 = new \App\ViewedStatus();
        $viewed_status2->name = 'Terminé';
        $viewed_status2->save();

        $viewed_status3 = new \App\ViewedStatus();
        $viewed_status3->name = 'Abandonné';
        $viewed_status3->save();
    }
}
