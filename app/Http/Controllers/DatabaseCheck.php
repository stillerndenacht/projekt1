<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DatabaseCheck extends Controller
{
    //
    public function editData(Request $request, $worker_ID = false)
    {
        if ($worker_ID) {
            $row = DB::select("SELECT * FROM worker WHERE worker_ID=:worker_ID", ['worker_ID'=> $worker_ID]);
            return view('editentry', ['status' => array('status' => '', 'data' =>               $row)]);
        }
        /*dd($row);*/
        if ($request->input('submit')) {
            DB::update('update worker set Vorname = ? where worker_ID = ?', [$request->input                 ('text'), $request->input('worker_ID')]);
        }


        /*dd("hat geklappt!");*/
        $results = DB::select("SELECT * FROM worker");
        /*dd($results);*/
        return view('editdata', ['results' => $results]);

    }

}
