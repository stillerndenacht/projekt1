<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beispielmodel extends Model
{
        //another name for my table
    //protected $table = 'worker';

    //another name for my primary key (PK)
    //protected $primaryKey = 'worker_ID';
    use SoftDeletes;
}
