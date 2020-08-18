<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DatabaseCheck extends Controller
{
    //
    public function editData(Request $request, $worker_ID = false)
    {
        //new -> insert
        //Einfügen neuer Datensätze - werden am Ende angehängt:
        /*$beispielmodel = new \App\Beispielmodel();
            $beispielmodel->modell='Modelka';
            $beispielmodel->save();*/

        //edit -> update
        /*$beispielmodelUpdate = \App\Beispielmodel::find(1001);
        $beispielmodelUpdate->modell = 'Modelka3';
        $beispielmodelUpdate->save();*/
        //dd($beispielmodelUpdate);

        /*$beispielmodelDelete = \App\Beispielmodel::find(998);
        $beispielmodelDelete->delete();*/

        /*$beispielmodels = \App\Beispielmodel::all();
        foreach ($beispielmodels as $beispielmodel) {
            dd($beispielmodel);
        }*/
        $beispielmodels = \App\Beispielmodel::orderBy("modell")->take(10)->get();
        foreach ($beispielmodels as $beispielmodel) {
            var_dump($beispielmodel);
        }
        //dd();


        if ($worker_ID) {
            /*$row = DB::select("SELECT * FROM worker WHERE worker_ID=:worker_ID", ['worker_ID' => $worker_ID]);*/
            $row = \App\WorkerModel::all();
            foreach ($WorkerModels as $WorkerModel) {
                var_dump($WorkerModel);
            }
            return view('editentry', ['status' => array('status' => '', 'data' => $row)]);
        }
        /*dd($row);*/
        if ($request->input('submit')) {
            DB::update('update worker set Vorname = ? where worker_ID = ?', [$request->input('text'), $request->input('worker_ID')]);
            /*dd('test');*/

        }

        /*dd("hat geklappt!");*/
        $results = DB::select("SELECT * FROM worker");
        /*dd($results);*/
        return view('editdata', ['results' => $results]);


    }


}
