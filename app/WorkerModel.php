<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//lädt die SoftDeletes dazu
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerModel extends Model
{
    protected $primaryKey = 'worker_ID';
    //löscht nicht endgültig sondern macht nur unsichtbar und markiert
    use SoftDeletes;
}
