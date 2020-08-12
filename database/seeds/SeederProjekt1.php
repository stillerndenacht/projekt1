<?php

use Illuminate\Database\Seeder;

class SeederProjekt1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$lastInsertId = DB::getPdo()->lastInsertId();

        DB::table('worker')->insert([
            'worker_ID'=>$lastInsertId,
            'Vorname'=>Str::random(10),
            'Nachname'=>Str::random(10)
        ]);*/
        $lastInsertId1 = DB::getPdo()->lastInsertId();
        DB::table('projekte')->insert([
            'Projekt_ID'=>$lastInsertId1,
            'worker_ID'=>2,
            'Kürzel'=>Str::random(10),
            'Gesamtzeit'=>rand(10,100),
            'Deadline'=>date('Y-m-d H:m:s')
        ]);
       /* $lastInsertId2 = DB::getPdo()->lastInsertId();
        DB::table('projektaufgaben')->insert([
            'Aufgaben_ID'=>$lastInsertId2,
            'worker_ID'=>$lastInsertId2,
            'KW'=>rand(10,100),
            'Aufgabenbeschreibung'=>Str::random(100),
            'Estimate'=>rand(1,8),
            'Deadline Aufgaben'=>date('Y-m-d H:m:s')
        ]);*/
    }
}
